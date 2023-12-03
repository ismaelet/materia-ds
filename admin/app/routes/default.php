<?php

// ajax calls
Route::add('/ajax/*', function ($path) {
	$module = explode('?', explode('ajax/', $path)[1])[0];
	include_once(__SERVER_ROOT__ . '/app/functions/ajax/' . $module . '.php');
});

// api calls
Route::add('/api/*', function () {
	include_once(__SERVER_ROOT__ . '/system/setup/api.php');
});

// favicon
Route::add('/favicon.ico', function () {
	include(__SERVER_ROOT__ . '/app/assets/favicon/favicon.ico');
});
