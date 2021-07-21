//ajax
function cargarContenido_a(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}

function cargarContenido_a_mensaje(abrir) {
	var contenedor;
	contenedor = document.getElementById('mensaje');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
            if(document.getElementById('ms')){
                //console.log(document.getElementById('ms'))
                cargarContenido_a('static/php/read.php')
            }
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

//1
turno = "x";
function jugar(a){
    if(a.innerHTML == '&nbsp;'){
        a.innerHTML = turno;
        turno = turno == 'x'? 'O':'x';
    document.getElementById("mensaje").innerHTML= "El turno ahora es de "+ turno;}
}

//2
function operaciones(){
    var n1 = parseInt(document.getElementById('n1').value)
    var n2 = parseInt(document.getElementById('n2').value)
    var operadores = document.getElementsByName('operacion')
    var resultado = document.getElementById('resultado')

    for (var index = 0; index < operadores.length; index++) {
        if(operadores[index].checked)
            operador = operadores[index].value
    }

   
    
    switch (operador) {
        case '+':
            for (var i = 1; i <= n2; i++) {
                var mensaje = n1+operador+i+'='
                var r = n1 + i+'<br>'
                resultado.innerHTML += mensaje + r
            }
            break;
   
        case '-':
            for (var i = 1; i <= n2; i++) {
                var mensaje = n1+operador+i+'='
                var r = n1 - i+'<br>'
                resultado.innerHTML += mensaje + r
            }
            break;
        case '*':
            for (var i = 1; i <= n2; i++) {
                var mensaje = n1+operador+i+'='
                var r = n1 * i+'<br>'
                resultado.innerHTML += mensaje + r
            }
            break;
        case '/':
            for (var i = 1; i <= n2; i++) {
                var mensaje = n1+operador+i+'='
                var r = n1 / i+'<br>'
                resultado.innerHTML += mensaje + r
            }
            break;
    }
}

function login() {
    var email = document.getElementById('email').value
    var password = document.getElementById('password').value
    var url="static/php/autenticar.php?email="+email+"&password="+password;

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get",url , true);
    ajax.send(null);
    cargarContenido_a_mensaje(url)
   
}

function change_level(x){
    console.log(x.value)

    var url="static/php/change_level.php?id="+x.value;
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get",url, true);
    ajax.send(null);
    cargarContenido_a('static/php/read.php')
    cargarContenido_a_mensaje(url)
    //cargarContenido_a_mensaje(url)
}