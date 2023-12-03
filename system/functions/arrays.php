<?php

function bump(&$array) {

	array_unshift($array, '');

	unset($array[0]);
}

function debug($array) {
	print('<pre>' . print_r($array, true) . '</pre>');
}

function explode_last($separator, $array) {
	return end(explode($separator, $array));
}
