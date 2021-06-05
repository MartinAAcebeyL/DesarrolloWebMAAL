function literal(n) {

    if (n == 100)
        return 'CIEN';
    
    if(n > 100)
        return 'ERROR';
    
    if(n <= 9){
        return Unidades(n);
    }else
        return Decenas(n)

}

function Unidades(num){
    switch(num){
        case 0: return "CERO";
        case 1: return 'UNO';
        case 2: return 'DOS';
        case 3: return 'TRES';
        case 4: return 'CUATRO';
        case 5: return 'CINCO';
        case 6: return 'SEIS';
        case 7: return 'SIETE';
        case 8: return 'OCHO';
        case 9: return 'NUEVE';
    }
}

function Decenas(num){

    decena = Math.floor(num/10);
    unidad = num - (decena * 10);

    switch(decena){
        case 1:
            switch(unidad){
                case 0: return 'DIEZ'
                case 1: return 'ONCE'
                case 2: return 'DOCE'
                case 3: return 'TRECE'
                case 4: return 'CATORCE'
                case 5: return 'QUINCE'
                default: return 'DIECI' + Unidades(unidad)
            }

        case 2:
            switch(unidad){
                case 0: return 'VEINTE';
                default: return 'VEINTI' + Unidades(unidad)
            }

        case 3: return DecenasY('TREINTA', unidad)
        case 4: return DecenasY('CUARENTA', unidad)
        case 5: return DecenasY('CINCUENTA', unidad)
        case 6: return DecenasY('SESENTA', unidad)
        case 7: return DecenasY('SETENTA', unidad)
        case 8: return DecenasY('OCHENTA', unidad)
        case 9: return DecenasY('NOVENTA', unidad)
        
    }
}

function DecenasY(strSin, numUnidades) {
    if (numUnidades > 0)
    return strSin +  ' Y '  + Unidades(numUnidades);
}