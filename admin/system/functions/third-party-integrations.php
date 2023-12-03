<?php

// setup Google Analytics
function google_analytics($code) {
	$content = file_get_contents(__SERVER_ROOT__ . '/vendor/google/analytics.php');
	$content = str_replace('{{ code }}', $code, $content);

	return $content;
}

// setup Meta Pixel
function meta_pixel($code) {
	$content = file_get_contents(__SERVER_ROOT__ . '/vendor/meta/pixel.php');
	$content = str_replace('{{ code }}', $code, $content);

	return $content;
}

// setup TikTok Pixel
function tiktok_pixel($code) {
	$content = file_get_contents(__SERVER_ROOT__ . '/vendor/tiktok/pixel.php');
	$content = str_replace('{{ code }}', $code, $content);

	return $content;
}
