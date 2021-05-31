/*1.  
Crear un programa en
java script que permita calcular el mayor de 4 números introducidos por promp


2.  
Escribir el código de
una función a la que se pasa como parámetro un número entero y devuelve como
resultado una cadena de texto que indica si el número es par o impar. Mostrar
por pantalla el resultado devuelto por la función.


3.  
Definir una función que
determine si la cadena de texto que se le pasa como parámetro es un palíndromo,
es decir, si se lee de la misma forma desde la izquierda y desde la derecha.
Ejemplo de palíndromo complejo: "La ruta nos aporto otro paso
natural". */
function ejer1(vector) {
    var may = 0
    for (var index = 0; index < vector.length; index++) {
        if (vector[index] > may)
            may = vector[index]
    }
    return may
}

function ejer2(n) {
    if (n % 2 == 0) 
        return 1
    return 0
}

function invertir(cadena) {
    var x = cadena.length;
    var cadenaInvertida = "";
  
    while (x>=0) {
      cadenaInvertida = cadenaInvertida + cadena.charAt(x);
      x--;
    }
    return cadenaInvertida;
  }

function ejer3(n) {
    var n = n.split(" ").join("")
    var r = invertir(n)
    return r.toLowerCase == n.toLowerCase
}