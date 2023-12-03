<?php

// select table
$index = 'id';
$tbl = 'images';
$add = false;
$query['index'] = 'page';
$query['order'] = 'asc';
$rowLinks = 'add?id={{id}}';

// handle search
$query['filter'] = "title LIKE CONCAT('%',?,'%') OR page LIKE CONCAT('%',?,'%')";

// select fields
$fields = [
	['title' => 'Immagine', 'type' => 'img', 'size' => 2],
	['title' => 'Titolo', 'name' => 'title', 'size' => 3],
	['title' => 'Pagina', 'name' => 'page', 'size' => 2],

	['type' => 'btn'],
];

$buttons = [
	['type' => 'edit'],
];

function _expand_results(&$entry, $field, $key, $row) {
	if ($field['type'] == 'img') {
		$entry['src'] = file_public_url('/pages/images/' . $row['path'] . '.webp');
	}
}
