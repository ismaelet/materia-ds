<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// theme
$this->set('theme_open', 'open');
$this->set('theme_color', 'dark');

// get variables
$id = $_GET['id'] ?? false;
$project = new Project($id);

if (!$project->id) redirect('/projects');

$this->title($project->title);

$this->desc = $project->description;
$this->thumbnail = file_url($project->cover);

// 3D render
$model = file_exists(__SERVER_ROOT__ . $file = '/uploads/projects/' . $id . '/model.glb') ? $file . '?=' . filemtime(__SERVER_ROOT__ . $file) : false;

/* TEMP */
/*
$tempImgs = glob(__SERVER_ROOT__ . '/uploads/projects/' . $project->id . '/*-1920.jpg');

foreach ($tempImgs as $tempImg) {
	$tempImgId = explode('-', explode('/' . $project->id . '/', $tempImg)[1])[0];
	if (!DB::exists('project_images WHERE id=?'))
		DB::add('project_images (id, projectId)', [$tempImgId, $project->id]);
}
*/
