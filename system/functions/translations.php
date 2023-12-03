<?php

function __($text) {

	static $translations = [];

	$language = $_SESSION['language'] ?? sysData('lang');

	if (empty($translations)) {

		include_once(__SERVER_ROOT__ . '/system/translations/' . $language . '.php');
		$additionalFiles = scan('/app/translations/' . $language, 'php');

		foreach ($additionalFiles as $additionalFile) {
			include_once($additionalFile);
			$translations = array_merge($translations, $additionalTranslations);
		}
	}

	$translated = $translations[$text] ?? $text;

	return $translated;
}
