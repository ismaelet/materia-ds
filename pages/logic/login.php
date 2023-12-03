<?php

//setup page
$this->set('theme_color', 'dark');
$this->set('theme_open', true);

//setup variabiles
$error = false;

//login
if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$remember = isset($_POST['remember']);
	$url = $_POST['url'] ?? false;

	$error = login($username, $password, $url, $remember);
}

//store variables
$this->set('error', $error);