<?php

// setup page
$id = $_GET['id'];
$tbl = 'images';
$index = 'id';
$index_show = 'title';

$image = DB::row('* FROM images WHERE id=?', [$id]);
$imagePath = '/pages/images/' . $image['path'] . '.webp';

// form
$inputs = [
	[
		['type' => 'lbl', 'text' => 'Titolo'],
		['name' => 'title', 'text' => 'Titolo', 'readonly' => true],
	],
	[
		['type' => 'lbl', 'text' => 'Immagine'],
		['type' => 'img', 'src' => file_public_url($imagePath)],
		['type' => 'file', 'name' => 'file'],
	],
];

function _expand_edit($tbl, $inputs, $index, $id) {
	$image = DB::row('* FROM images WHERE id=?', [$id]);
	$imagePath = __PUBLIC_SERVER_ROOT__ . '/pages/images/' . $image['path'] . '.webp';

	if (!empty($_FILES)) {
		$imgData = [
			'url' => $imagePath,
			'size' => $image['size'],
			'mode' => 'width',
			'quality' => $image['size'] >= 1024 ? 90 : 80,
		];

		upload_img($imgData);
	}
}
