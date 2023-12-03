<?php

class APIController {

	public function processRequest($requestEndpoint, $requestMethod, $requestContent) {

		//setup request
		$requestClass = 'API\\' . ucfirst($requestEndpoint) . 'Request';
		$classMethod = strtolower($requestMethod);

		//get the response
		if (class_exists($requestClass)) {
			$response = $requestClass::$classMethod($requestContent);

			//submit the response
			if (!isset($response['header']) && isset($response['content']) && !isset($response['content']['error'])) {
				switch ($requestMethod) {
					case 'GET':
						$response['header'] = 'HTTP/1.1 200 OK';
						break;
					case 'POST':
						$response['header'] = 'HTTP/1.1 201 Created';
						break;
					case 'PUT':
						$response['header'] = 'HTTP/1.1 201 Created';
						break;
					case 'PATCH':
						$response['header'] = 'HTTP/1.1 200 OK';
						break;
					case 'DELETE':
						$response['header'] = 'HTTP/1.1 200 OK';
						break;
				}
			}
		} else {
			$response['header'] = '400 Bad Request';
			$response['content'] = ['error' => $requestEndpoint . ' is not a valid endpoint'];
		}

		if (isset($response['header'])) header($response['header']);
		if (isset($response['content'])) echo json_encode($response['content']);
	}
}
