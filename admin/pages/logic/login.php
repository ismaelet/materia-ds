<?php

//setup variabiles
$error = false;

//login
if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$error = login($username, $password);
	
}