<?php

//setup page
$tbl = 'admin_categories';
$index = 'id';
$index_show = 'name';

//form
$inputs = [
	[
		['type' => 'lbl', 'text' => 'Nome'],
		['name' => 'name', 'text' => 'Nome'],
	],
	[
		['type' => 'lbl', 'text' => 'Slug'],
		['name' => 'slug', 'text' => 'Slug'],
	],
];

//edit
function _expand_edit($tbl, $inputs, $index, $id) {

	$old = DB::find('slug FROM admin_categories WHERE id=?', $id);

	DB::update('admin_categories SET name=?, slug=? WHERE ID=?', [$_POST['name'], $_POST['slug'], $id]);
	DB::update('admin_sections SET category=? WHERE category=?', [$_POST['slug'], $old]);

	if (file_exists($file = __SERVER_ROOT__ . '/app/assets/icons/navigation/' . $old . '.svg')) rename($file, __SERVER_ROOT__ . '/app/assets/icons/navigation/' . $_POST['slug'] . '.svg');
}
