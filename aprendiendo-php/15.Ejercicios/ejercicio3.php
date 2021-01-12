<?php

/* 
 * Ejercicio 3
 * Hacer un programa en php que compruebe si una variable esta vacia y si lo esta
 * rellenarla con un texto en minusculas y mostrarlo en mayusculas y negrita
 * 
*/
$variableDeControl = "";
var_dump($variableDeControl);

if(empty($variableDeControl)){
    $variableDeControl = "washington";
    echo '<h1>VARIABLE</h1>';
    $mayusculas= strtoupper($variableDeControl);
    echo "<strong>$mayusculas</strong>";
}else{
    echo "La variable es llena";
}

