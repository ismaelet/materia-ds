async function API(parcialEndpoint, method, content = {}) {
	const root = document.querySelector('html').getAttribute('data-client-root')

	let options = {}

	//generate endpoint
	let endpoint = root + '/api/' + parcialEndpoint

	//process the request content
	if (method == 'GET') {
		endpoint += '?' + new URLSearchParams(content)
	} else {
		options = {
			method: method,
			body: JSON.stringify(content),
		}
	}

	//send the request
	const response = await fetch(endpoint, options)

	//return the response
	return response.json()
}

async function AJAX(parcialEndpoint, parameters, contentType = 'json', debug = false) {
	const root = document.querySelector('html').getAttribute('data-client-root')

	//generate endpoint
	const endpoint = root + '/ajax/' + parcialEndpoint + '?' + new URLSearchParams(parameters)

	//send the request
	const response = await fetch(endpoint)

	//return the response
	const data = contentType == 'json' ? response.json() : response.text()

	//debugger
	if (debug) {
		const debugResponse = await fetch(endpoint)
		console.log(await debugResponse.text())
	}

	return data
}
