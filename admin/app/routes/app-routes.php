<?php

// home
Route::add('/', function () {
	$view = new View('home');
	$view->template = 'admin';
	$view->middlewares = ['admin'];
	$view->show();
});

// sections
$sections = DB::select('slug, category FROM admin_sections');

while ($section = $sections->fetch_assoc()) {

	Route::add('/' . $section['category'] . '/' . $section['slug'], function ($path) {

		// fetch section data
		$uriParts = explode('/', explode(__CLIENT_ROOT__ . '/', $path)[1], 2);
		$section = DB::row('* FROM admin_sections WHERE slug=? AND category=?', [$uriParts[1], $uriParts[0]]);

		// setup view
		$view = new View('section-' . $section['category'] . '/' . $section['slug']);
		$view->title = $section['name'];
		$view->template = $section['template'];
		$view->middlewares = ['admin'];
		$view->show();
	});
}
