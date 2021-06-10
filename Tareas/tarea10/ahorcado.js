function iniciar() {
    var palabras = ["eucalipto", "auto", "internet", "casa", "perro", "cuaderno", "computadora", "naranja", "juego", "cabello"];
    palabra = palabras[Math.floor(Math.random() * 10)];
    n = palabra.length;
    e = espacios(n);
    document.getElementById('letras').innerHTML = e;
    document.getElementById('boton').style.visibility = "hidden";
    error = 0;
}

function espacios(n) {
    var aux = "";
    for (var i = 0; i < n; i++) {
        aux += ('<input type="text" id="l' + i + '" class="caja"  readonly>');
    }
    return aux;
}

function verificar() {
    l = document.getElementById('l').value;
    var acerto = false;
    
    for (i = 0; i < palabra.length; i++) {
        if (palabra[i] == l) {
            acerto = true;
            v = "l" + i;
            document.getElementById(v).value = l;
            
        }  
    }
    
    

    if (!acerto) {
        error++;
        document.getElementById('imagen').src = error + ".png";
    }
    
}