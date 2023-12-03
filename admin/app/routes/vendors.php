<?php

Route::add('/instagram-auth', function () {

	ini_set('display_errors', '1');

	$redirectUri = __CLIENT_URL__ . '/instagram-auth';

	$code = $_GET['code'] ?? false;

	//request code function
	function request_code($redirectUri) {

		header('Location: https://www.instagram.com/oauth/authorize/?client_id=1368739646965253&client_secret=REDACTED_INSTAGRAM_SECRET&redirect_uri=' . $redirectUri . '&response_type=code&scope=user_profile');
	}

	//exchange code
	if ($code) {

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.instagram.com/oauth/access_token');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt(
			$ch,
			CURLOPT_POSTFIELDS,
			http_build_query([
				'client_id' => '1368739646965253',
				'client_secret' => 'REDACTED_INSTAGRAM_SECRET',
				'code' => $code,
				'grant_type' => 'authorization_code',
				'redirect_uri' => $redirectUri,
			])
		);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = json_decode(curl_exec($ch), true);

		curl_close($ch);

		if (isset($server_output['error_type'])) request_code($redirectUri);
		else if (isset($server_output['access_token'])) echo $server_output['access_token'];
		else print_r($server_output);

		//request code
	} else request_code($redirectUri);
});
