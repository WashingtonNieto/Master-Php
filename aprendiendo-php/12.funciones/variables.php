<?php

/* 
 * Variables locales: Son las que se definen dentro de una funcion y no se pueden
 * ser usadas fuera de la funcion, solo estan disponibles dentro. a no ser que
 * hagamos un return.
 * 
 * Variables globales: Son las que se declaran fuera de una funcion y estan 
 * dispobibles dentro y fuera de las funciones
 */

$frase = " Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2020;
    echo "<h1>$year</h1>";
    
    return $year;
}

echo holaMundo();

//funciones variables

function buenasDias(){
    return "Hola! Buenos dias";
}
function buenasTardes(){
    return "Hey! que tal la comida";
}
function buenasNoches(){
    return "Te vas a dormir? buenas noches";
}
$horario = "Tardes";
$miFuncion = "buenas".$horario;
echo $miFuncion();