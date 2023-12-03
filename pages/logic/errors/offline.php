<?php

if (isset($_POST['submit'])) {
	
	if (isset($_SESSION['userID'])) logout();
	
	redirect('/login');
	
}