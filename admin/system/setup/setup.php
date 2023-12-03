<?php

// setup global variables
global $user, $view;

// administrative panel
$admin = true;

// set migration status
$migration = true;

// start session
session_start();

// set constants
define('__SERVER_ROOT__', explode('/system', str_replace("\\", "/", __DIR__))[0]);
define('__CLIENT_ROOT__', str_replace(rtrim($_SERVER['DOCUMENT_ROOT'], '/'), '', __SERVER_ROOT__));
define('__CLIENT_URL__', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . ':// ' . $_SERVER['HTTP_HOST'] . __CLIENT_ROOT__);
define('__ICONS__', '/system/assets/icons/');
define('__APP_ICONS__', '/app/assets/icons/');
define('__IMG__', '/app/assets/images/');
define('__LOGO__', '/app/assets/logo/');

if ($admin) {
	define('__PUBLIC_SERVER_ROOT__', explode('/admin', __SERVER_ROOT__)[0]);
	define('__PUBLIC_CLIENT_ROOT__',  explode('/admin', __CLIENT_ROOT__)[0]);
	define('__PUBLIC_CLIENT_URL__',  explode('/admin', __CLIENT_URL__)[0]);
}

// classes autoloader
spl_autoload_register(function ($class) {

	$class = str_replace('\\', '/', $class);

	if (file_exists($file = __SERVER_ROOT__ . '/app/classes/' . $class . '.php')) include_once($file);
	else if (file_exists($file = __SERVER_ROOT__ . '/system/classes/' . $class . '.php')) include_once($file);
	else if (defined('__PUBLIC_SERVER_ROOT__') && file_exists($file = __PUBLIC_SERVER_ROOT__ . '/app/classes/' . $class . '.php')) include_once($file);
});

// basic configurations
include_once(__SERVER_ROOT__ . '/app/config/config.php');

date_default_timezone_set($sysData['timezone']);

// connect
if (!$sysData['static']) {

	$con = new mysqli($sysData['hostname'], $sysData['username'], $sysData['password'], $sysData['database']) or exit('Can\'t connect to the database');
	$con->query('SET NAMES utf8');
}

// load basic resources
include_once('migration.php');
include_once('functions.php');
include_once('middlewares.php');
include_once('plugins.php');
foreach (scan('/app/routes', 'php') as $route) include_once($route);

// other basic paths
if (!isset($sysData['admin-domain'])) $sysData['admin-domain'] = html_link('admin');
if (!isset($sysData['logged-redirect'])) $sysData['logged-redirect'] = '/';

// recover login
if (!$sysData['static']) {

	if (!isset($_SESSION['user']) && isset($_COOKIE['auth_token'])) login_direct($_COOKIE['auth_token']);

	$userID = $_SESSION['user'] ?? 0;

	$user = new User($userID);
}

// set language
if (!isset($_SESSION['language'])) $_SESSION['language'] = sysData('lang');

if (isset($_GET['lang']) && sysData('multi-lang')) {

	foreach (sysData('lang-all') as $lang) {

		if ($_GET['lang'] == $lang[1]) {

			$_SESSION['language'] = $_GET['lang'];

			break;
		}
	}
}

// recover theme color
$_SESSION['theme-color'] = sysData('theme-color') ?: ($_COOKIE['theme-color'] ?? 'light');

// render page
Route::run();
