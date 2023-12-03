<?php

function load_middleware($name) {

	/*
	* Middleware list
	*/
	function middleware_public() {
		global $user;
		$public = sysData('static') ?: DB::find('value FROM config WHERE name=?', ['public']);
		if (!$public && !$user->admin) redirect('/offline');
	}

	function middleware_not_public() {
		$public = sysData('static') ?: DB::find('value FROM config WHERE name=?', ['public']);
		if ($public) redirect('/');
	}

	function middleware_wip() {
		redirect('/wip');
	}

	function middleware_logged() {
		if (!logged()) redirect('/login');
	}

	function middleware_not_logged() {
		if (sysData('static') || logged()) redirect(sysData('logged-redirect'));
	}

	function middleware_admin() {
		global $user;
		if (!$user->admin) redirect('/login');
	}

	function middleware_not_admin() {
		global $user;
		if ($user->admin) redirect(sysData('logged-redirect'));
	}

	/*
	* Load middleware
	*/
	$middleware = 'middleware_' . str_replace('-', '_', $name);

	if (function_exists($middleware)) call_user_func($middleware);
	else exit();
}
