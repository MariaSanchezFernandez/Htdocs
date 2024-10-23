<?php
//Comprueba si una cadena comienza  con una letra seguida de al menos tres numeros o letras o caracteres especiales

$patron = '@^[[:alpha:]][a-zA-Z0-9_()#*¢]{3,}@';

$cadenas[] = "bajdajs";
$cadenas[] = "dvdfv";
$cadenas[] = "DAFSDajs";
$cadenas[] = "h()msdjksnc";
$cadenas[] = "bajdajs";
$cadenas[] = "234dsvdfdfPi";

foreach($cadenas as $cadena){
    if (preg_match($patron, $cadena) == 0) {
        echo "$cadena => no OK <br>";
    }else{
        echo "$cadena => OK <br>";
    };
};


/*
Comprobar que uan cadena tiene una estructura de fecha con formato[D]D/[M]M/AAAA    
Recuperar los tres componente dia, mes y año
*/

$fechas[] = '12/09/2005';
$fechas[] = "19/9/2005";
$fechas[] = "02/50/25";

$patron2 = '#^(\d{1,2})\/(\d{1,2})\/(\d{4})$#';


foreach($fechas as $fecha){
    $ok = (preg_match($patron2, $fecha, $resultado) > 0);
    if ($ok == true) {
        echo "$fecha es válida<br/>";
    } else{
         echo "$fecha no es válida<br/>";
    }
};


$antes = "12/04/2024";

$patron3 = '#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#';

$reemplazo = "$3-$2-$1";

$despues = preg_replace($patron3, $reemplazo, $antes);

echo "$antes => $despues";
