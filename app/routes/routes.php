<?php

Route::add('/', function() { $view = new View('home'); $view->show(); });

Route::add('/design', function() { $view = new View('design'); $view->show(); });
Route::add('/rendering', function() { $view = new View('rendering'); $view->show(); });
Route::add('/drone', function() { $view = new View('drone'); $view->show(); });
Route::add('/printing', function() { $view = new View('printing'); $view->show(); });

Route::add('/projects', function() { $view = new View('projects'); $view->show(); });
Route::add('/projects/work', function() { $view = new View('work'); $view->show(); });

Route::add('/team', function() { $view = new View('team'); $view->show(); });