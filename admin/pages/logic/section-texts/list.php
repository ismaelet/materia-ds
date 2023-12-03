<?php

// select table
$index = 'id';
$tbl = 'texts';
$add = false;
$query['index'] = 'title';
$query['order'] = 'asc';
$rowLinks = 'add?id={{id}}';

// handle search
$query['filter'] = "name LIKE CONCAT('%',?,'%') OR category LIKE CONCAT('%',?,'%')";

// select fields
$fields = [
	['title' => 'Nome del testo', 'name' => 'title', 'size' => 2],
	['title' => 'Contenuto', 'name' => 'text', 'size' => 4],

	['type' => 'btn'],
];

$buttons = [
	['type' => 'edit'],
];
