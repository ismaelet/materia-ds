<?php

// select table
$index = 'id';
$tbl = 'projects';
$query['index'] = 'id';
$rowLinks = 'add?id={{id}}';

// handle search
$query['filter'] = "title LIKE CONCAT('%',?,'%') OR location LIKE CONCAT('%',?,'%')";

// select fields
$fields = [
	['title' => 'ID', 'name' => 'id', 'size' => 's'],
	['title' => 'Titolo', 'name' => 'title', 'size' => 'l'],
	['title' => 'Anno', 'name' => 'year', 'size' => 's'],
	['title' => 'Località', 'name' => 'location', 'size' => 'm'],
	['title' => 'Stato', 'name' => 'stage', 'size' => 'm'],
	['title' => 'Pubblicato', 'name' => 'status', 'size' => 's', 'type' => 'boolean-icon'],

	['type' => 'btn'],
];

$buttons = [
	['type' => 'edit'],
	['type' => 'delete'],
];
