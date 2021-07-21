//ajax
function cargarContenido_a(abrir) {
	var contenedor;
	contenedor = document.getElementById('cuerpo');
	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}

//fetch
function cargarContenido_f(abrir) {
	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('contenido').innerHTML = text;
	}).catch(function (err) {
		alert('error');
	});
}
//pregunta 2
function pregunta2n() {
	
	var n = parseInt(document.getElementById('n').value)
	var url="p2n.php?n="+n;

	var contenedor;
	contenedor = document.getElementById('cuerpo');
	var ajax = new XMLHttpRequest() 
	ajax.open("get", url, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);

}

function pregunta2c() {
	var n = document.getElementById('cadena').value
	var url="p2c.php?n="+n;

	var contenedor;
	contenedor = document.getElementById('cuerpo');
	var ajax = new XMLHttpRequest() 
	ajax.open("get", url, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);

}

//pregunta 3
function pregunta3(){
	var r = document.getElementById('oper').value
	if (r == 1) {
		document.getElementById('resultado').innerHTML += '<textarea cols="30" rows="10"></textarea>'
	} else if(r == 2) {
		document.getElementById('resultado').innerHTML += '<input type="date"></input>'	
	}
} 
//pregunta 4
function pregunta4() {
	formData = new FormData();
	formData.append("email", document.getElementById("email").value);
	formData.append("password", document.getElementById("password").value);

	fetch('autenticar.php', {
		method: 'post',
		body: formData
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('cuerpo').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}
//pregunta 5


function cargarContenido_correos(abrir) {
	var contenedor;
	contenedor = document.getElementById('bandeja');
	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}

function AgregarCorreo() {
	formData = new FormData();
	formData.append("destino", document.getElementById("destino").value);
	formData.append("asunto", document.getElementById("asunto").value);
	formData.append("sms", document.getElementById("sms").value);
	formData.append("date", document.getElementById("date").value);

	fetch('insertCorreo.php', {
		method: 'post',
		body: formData
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('bandeja').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}