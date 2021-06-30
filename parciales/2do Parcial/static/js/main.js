//ajax
function cargarContenido_a(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
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

//
function editar(x) {
	var id = x.value
	cargarContenido_f('static/php/formedit.php?id='+id)
}

function enviar() {
	var titulo = document.getElementById('titulo').value
    var autor = document.getElementById('autor').value
	var anio = document.getElementById('anio').value
	var id = document.getElementById('btn').value

	//
	var ajax = new XMLHttpRequest() 
	ajax.open("post", "static/php/edit.php", true);
    var cadena = "titulo="+titulo+"&autor="+autor+"&anio="+anio+"&id="+id;
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);
}

function uno() {
	var enlaces = document.getElementsByTagName("a")
	console.log(document.getElementById("p1"))
}

function login() {
	var contenedor;
	contenedor = document.getElementById('contenido');

    var email = document.getElementById('email').value
    var password = document.getElementById('password').value
    var ajax = new XMLHttpRequest() 

	ajax.open("post", "static/php/autenticar.php", true);
    var cadena = "usuario="+email+"&password="+password;
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}

	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);
}
    
function cuadros() {
    var cantidad = parseInt(document.getElementById('cant').value)
    document.getElementById('op').innerHTML = '<button onclick="suma()">+</button>'+'<div id="cuadros"></div>'
    for (var i = 1; i <= cantidad; i++) {
        document.getElementById('cuadros').innerHTML +='<p style="border: 2px solid black; width:100px; margin:0;">'+i+'</p>'
    }
}

function suma() {
    var cont = 0;
    
    var cantidad = parseInt(document.getElementById('cant').value)
    for (var i = 1; i <= cantidad; i++) 
        cont+=i;
    document.getElementById('cuadros').innerHTML +='<p style="border: 2px solid black; width:100px; margin:0;">'+cont+'</p>'
}


function cambio() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var id = document.getElementById('carrera').value
	console.log(document.getElementById('carrera'))
	var url="static/php/formprestamo.php?id="+id;

    var ajax = new XMLHttpRequest() //crea el objetov ajax
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
    ajax.open("get",url, true);
    ajax.send(null);

}