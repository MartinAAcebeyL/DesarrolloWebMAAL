function cargarContenido(abrir) {
	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('contenido').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}
