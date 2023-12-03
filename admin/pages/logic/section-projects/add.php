<?php

global $id;

// plugins
plugin_jquery_ui();

// setup variables
$updated = $_GET['updated'] ?? false;
$added = $_GET['added'] ?? false;
$id = $_GET['id'] ?? false;
$item = new Project($id);

// forms setup
$itemInputs = [
	[
		['type' => 'lbl', 'text' => 'Titolo'],
		['name' => 'title', 'text' => 'Titolo', 'required' => true, 'value' => $item->id ? $item->title : '',],
	],
	[
		['type' => 'lbl', 'text' => 'Anno'],
		['name' => 'year', 'text' => 'Anno', 'maxlength' => 4, 'required' => true, 'value' => $item->id ? $item->year : ''],
	],
	[
		['type' => 'lbl', 'text' => 'Località'],
		['name' => 'location', 'text' => 'Località', 'value' => $item->id ? $item->location : ''],
	],
	[
		['type' => 'lbl', 'text' => 'Stato'],
		[
			'type' => 'select', 'name' => 'stage', 'text' => 'Stato', 'array' => [
				['Concept', 'Concept'],
				['Progettazione', 'Progettazione'],
				['Proposta', 'Proposta'],
				['Inizio lavori', 'Inizio lavori'],
				['Realizzato', 'Realizzato'],
			],
			'value' => $item->id ? $item->stage : ''
		],
	],
	[
		['type' => 'lbl', 'text' => 'Descrizione'],
		['type' => 'textarea', 'name' => 'description', 'text' => 'Descrizione', 'value' => $item->id ? $item->description : ''],
	],
];

// form events
if (isset($_POST['submit-form'])) {

	// create the project is it doesn't exist
	if (!$id) {
		$id = DB::add('projects () VALUES ()');
		$added = true;
	}

	// update the project
	form_db_update('projects', $itemInputs, 'id', $id);

	DB::update('projects SET status=?, size=? WHERE id=?',	[$_POST['status'], $_POST['size'], $id]);

	if (!empty($_FILES['cover-img']['name'])) {
		project_upload_cover();
	}

	if (!empty($_FILES['new-img-files']['name'][0])) {
		// upload images
		project_upload_img();
	} else if (isset($_POST['images'])) {
		// reorder the images
		foreach ($_POST['images'] as $key => $img) {
			DB::update('project_images SET sort=? WHERE id=?', [$key + 1, $img]);
		}
	}

	// refresh
	redirect('?id=' . $id . '&' . ($added ? 'added' : 'updated') . '=1');
}

// delete
if (isset($_POST['delete'])) {
	$path = __PUBLIC_SERVER_ROOT__ . '/uploads/projects/' . $id . '/*';
	$files = glob($path);

	DB::delete('projects WHERE id=?', [$id]);

	foreach ($files as $file) unlink($file);

	redirect('list');
}

// add an img
if (isset($_POST['upload-img'])) {
	project_upload_img();
	redirect('#gallery');
}

// replace the cover
if (isset($_POST['upload-cover'])) {
	project_upload_cover();
	redirect('#cover');
}

// delete an img
if (isset($_POST['delete-img'])) {
	$imgId = $_POST['delete-img'][0];
	$path = __PUBLIC_SERVER_ROOT__ . '/uploads/projects/' . $id . '/' . $imgId . '{-,.}*';
	$files = glob($path, GLOB_BRACE);

	foreach ($files as $file) unlink($file);

	DB::delete('project_images WHERE id=?', [$imgId]);

	redirect('#gallery');
}

/*
* Functions
*/
// reorder images
/*function reorder_imgs($itemId) {
	$imgs = DB::select('id FROM projects_images WHERE projectId=? ORDER BY sort ASC', [$itemId]);
	$i = 0;
	while ($img = $imgs->fetch_assoc()) {
		$i++;
		DB::update('projects_images SET sort=? WHERE id=?', [$i, $img['id']]);
	}
}*/

// upload an image
function project_upload_img() {

	global $id;

	foreach ($_FILES['new-img-files']['name'] as $key => $looping) {

		$sizes = [
			[1920, 90, 'min'],
			[400, 70, 'max'],
		];

		$imgId = DB::row('MAX(id) as maxId FROM project_images')['maxId'] + 1;

		foreach ($sizes as $size) {
			$fileUrl = __PUBLIC_SERVER_ROOT__ . '/uploads/projects/' . $id . '/' . $imgId . '-' . ($size[0][0] ?? $size[0]) . '.jpg';
			$fileConfig = [
				'url' => $fileUrl,
				'name' => 'new-img-files',
				'size' => $size[0],
				'quality' => $size[1],
				'mode' => $size[2],
			];

			$fileConfig['key'] = $key;

			upload_img($fileConfig);
		}

		$sort = DB::row('MAX(sort) as maxSort FROM project_images WHERE projectId=?', [$id])['maxSort'] + 1;

		DB::add('project_images (id, projectId, sort) VALUES (?, ?, ?)', [$imgId, $id, $sort]);
	}
}

// upload the cover
function project_upload_cover() {

	global $id;

	$fileUrl = __PUBLIC_SERVER_ROOT__ . '/uploads/projects/' . $id . '/cover.jpg';
	$fileConfig = [
		'url' => $fileUrl,
		'name' => 'cover-img',
		'size' => 1400,
		'quality' => 80,
		'mode' => 'min',
	];

	upload_img($fileConfig);
}
