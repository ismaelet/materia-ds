<?php

//style
$this->styles->add(__SERVER_ROOT__ . '/pages/styles/login.css');

//setup variables
$error = false;

//setup form
$inputs = [
	[
		['type' => 'lbl', 'text' => __('Username')],
		['name' => 'username', 'text' => __('Username'), 'maxlength' => 20, 'required' => true,],
		['type' => 'error', 'error' => 'user-match', 'text' => __('The chosen username already exists'),],
	],
	[
		['type' => 'lbl', 'text' => __('Password'),],
		['type' => 'password', 'text' => __('Password'), 'name' => 'password', 'maxlength' => 20, 'required' => true,],
		['type' => 'error', 'error' => 'password-short', 'text' => __('The chosen password is too short'),],
		['type' => 'password', 'text' => __('Confirm password'), 'name' => 'password-confirmation', 'maxlength' => 20, 'required' => true,],
		['type' => 'error', 'error' => 'password-match', 'text' => __('The chosen passwords do not match'),],
	],
	[
		['type' => 'lbl', 'text' => 'E-mail'],
		['type' => 'email', 'text' => 'Indirizzo e-mail', 'name' => 'mail', 'maxlength' => 50, 'required' => true,],
		['type' => 'error', 'error' => 'mail-match', 'text' => __('Email address already associated with another account'),],
	],
	/*[
		['type' => 'cbx', 'text' => 'Ho letto e acconsento al <a href="'.__CLIENT_ROOT__.'/infos/privacy">trattamento dei dati</a>', 'required' => true,],
	],*/
];

//submit
if (isset($_POST['submit'])) {

	//check for errors
	if (DB::exists('users WHERE username=?', [$_POST['username']])) $error = 'user-match';
	else if (DB::exists('users WHERE mail=?', [$_POST['mail']])) $error = 'mail-match';
	else if (strlen($_POST['password']) < 6) $error = 'password-short';
	else if ($_POST['password'] != $_POST['password-confirmation']) $error = 'password-match';
	else {

		//add user
		$id = DB::add('users (username, password, mail) VALUES (?, MD5(?), ?)', [$_POST['username'], $_POST['password'], $_POST['mail']]);

		DB::add('links (userID) VALUES (?)', [$id]);

		login($_POST['username'], $_POST['password']);
	
	}

}