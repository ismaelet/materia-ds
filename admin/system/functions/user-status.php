<?php

//check if the user is logged in
function logged() {

	global $user;

	return ($user->id && !$user->guest) ? true : false;

}

//check if the user is a guest
function guest() {

	global $user;

	return $user->guest;

}

//check if the user is an admin
function admin() {

	global $user;

	return $user->admin ? true : false;

}


//check if the user a manager
function manager() {

	global $user;

	return $user->admin == 2;

}