<?php

function animate_text($text, $speed = 5, $offset = 0, $style = 'bottom') {

	$split = '';

	$text = str_split($text);
	$speed = $speed / 100;
	$offset = $offset / 100;

	if ($style == 'bottom') $class = 'slide-bottom';
	else if ($style == 'top') $class = 'slide-top';

	foreach ($text as $i => $char) {

		if ($style == 'mixedV') {
			$seed = rand(1, 2);
			$class = $seed == 1 ? 'slide-bottom' : 'slide-top';
		}

		$split .= '<span class="load ' . $class . ' inlb" style="transition-delay: ' . ($speed * $i + $offset) . 's;">' . $char . '</span>';
	}

	return $split;
}
