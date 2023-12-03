<?php

// login
Route::add('/login', function () {
	$view = new View('login');
	$view->title = 'Login';
	$view->middlewares = ['not_admin'];
	$view->template = 'void';
	$view->show();
});

// logout
Route::add('/logout', function () {
	$view = new View('logout');
	$view->title = 'Logout';
	$view->middlewares = ['admin'];
	$view->template = 'void';
	$view->show();
});
