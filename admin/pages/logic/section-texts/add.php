<?php

// setup page
$tbl = 'texts';
$index = 'id';
$index_show = 'title';

// form
$inputs = [
	[
		['type' => 'lbl', 'text' => 'Nome del testo'],
		['name' => 'title', 'text' => 'Nome', 'readonly' => true],
	],
	[
		['type' => 'lbl', 'text' => 'Contenuto'],
		['type' => 'textarea', 'name' => 'text', 'text' => 'Slug'],
	],
];
