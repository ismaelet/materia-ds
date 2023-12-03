<?php

//load logic
$this->add_logic('admin', 'template');
$this->styles->add(__SERVER_ROOT__ . '/app/templates/styles/admin.css');
$this->scripts->add(__SERVER_ROOT__ . '/app/templates/scripts/admin.js');

require_once(__SERVER_ROOT__ . '/pages/logic/' . $this->name . '.php');

//delete entry
if (isset($_POST['delete'])) {
	DB::delete($tbl . ' WHERE ' . $index . '=?', [$_POST[$index]]);
}

//setup variables
$values = [];

$pageN = $_GET['page'] ?? 1;

$query['add'] = $add ?? true;
$query['addID'] = $query['addID'] ?? false;
$query['search-bar'] = $query['search-bar'] ?? true;
$query['block'] = $query['block'] ?? 40;
$query['from'] = ($pageN - 1) * $query['block'];
$query['fields'] = $query['fields'] ?? '*';
$query['where'] = $query['where'] ?? false;

if (isset($_GET['index'])) $query['index'] = $_GET['index'];
else $query['index'] = $query['index'] ?? $index;

if (isset($_GET['order'])) $query['order'] = $_GET['order'];
else $query['order'] = $query['order'] ?? 'desc';

//search
$search = isset($_GET['search']) ? trim($_GET['search']) : false;

if ($search) {
	$query['filter'] = $query['where'] ? 'AND ' . $query['filter'] : 'WHERE ' . $query['filter'];
	for ($i = 0; $i < substr_count($query['filter'], '?'); $i++) $values[] = $search;
} else $query['filter'] = '';

//where
$query['where'] = $query['where'] ? 'WHERE ' . $query['where'] : '';

//limit
$query['limit'] = 'LIMIT ' . $query['from'] . ', ' . $query['block'];

//query
$query_limit = $query['fields'] . ' FROM ' . $tbl . ' ' . $query['where'] . ' ' . $query['filter'];
$query_all = $tbl . ' ' . $query['where'] . ' ' . $query['filter'];

$res = DB::select($query_limit, $values);

$resultsN = DB::count($query_all, $values);
$pagesN = ceil($resultsN / $query['block']);

//pages
$pageMin = $pageN - 2;

if ($pageMin < 1) $pageMin = 1;

$pageMax = $pageMin + 4;

if ($pageMax > $pagesN) $pageMax = $pagesN;

//results
include_once('list/results.php');
