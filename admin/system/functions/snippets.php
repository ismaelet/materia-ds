<?php

function snippet_binary_icon($value) {
	if ($value) {
		$snippet = '<div class="binary-icon binary-icon_yes icon-box">';
		$snippet .= icon_embed('correct');
	} else {
		$snippet = '<div class="binary-icon binary-icon_no icon-box">';
		$snippet .= icon_embed('close');
	}

	$snippet .= '</div>';

	return $snippet;
}
