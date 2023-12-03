<?php

//setup Google Analytics
function google_analytics($code) {
	$content = file_get_contents(__SERVER_ROOT__ . '/vendor/google_analytics/analytics.php');
	$content = str_replace('{{ code }}', $code, $content);

	return $content;
}

//setup Facebook Pixel
function facebook_pixel($code) {
	$content = file_get_contents(__SERVER_ROOT__ . '/vendor/facebook_pixel/pixel.php');
	$content = str_replace('{{ code }}', $code, $content);

	return $content;
}
