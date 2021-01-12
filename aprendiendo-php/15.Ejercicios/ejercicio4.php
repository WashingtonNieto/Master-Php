<?php

/* 
 * Ejercicio 4
 * Crear un scrip en php que tenga 4 variables, 
 * una de tipo array,
 * otra de tipo string,
 * otra de tipo int,
 * Otra de tipo boolena 
 * y que imprima un mensaje segun el tipo de variable que sea
 */

$tipoArray = array("manzanas","mangos");
$tipoString = "Master en PHP";
$tipoInt = 77;
$tipoBoleana = true;

var_dump($tipoArray);
var_dump($tipoString);
var_dump($tipoInt);
var_dump($tipoBoleana);

if(is_array($tipoArray)){
    echo "<h1>Es un array</h1>";
}
if(is_string($tipoString)){
    echo "<h1>$tipoString</h1>";
}
if(is_integer($tipoInt)){
    echo "<h1>$tipoInt</h1>";
}
if(is_bool($tipoBoleana)){
    echo "<h1>$tipoBoleana</h1>";
}

