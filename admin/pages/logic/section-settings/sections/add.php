<?php

//setup page
$tbl = 'admin_sections';
$index = 'id';
$index_show = 'name';

//form
$inputs = [
	[
		'name' => 'name',
		'text' => 'Titolo',
	],
	[
		'name' => 'slug',
		'text' => 'Slug',
	],
	[
		'type' => 'select',
		'name' => 'category',
		'text' => 'Categoria',
		'query' => '* FROM admin_categories ORDER BY manager ASC, name ASC',
		'field-name' => 'slug',
		'field-show' => 'name',
	],
	[
		'name' => 'url',
		'text' => 'URL',
	],
	[
		'name' => 'template',
		'text' => 'Template',
	],
	[
		'type' => 'cbx',
		'name' => 'hidden',
		'text' => 'non apparirà nel menu laterale',
	],
];
