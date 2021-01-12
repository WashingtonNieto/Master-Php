<?php

/* 
 * Ejercicio 2
 * Hacer un programa en php que anada valores a un array mientras que su 
 * longitud sea menor a 120 y luego mostrarlo por pantalla.
 */

//FUNCIONES
function mostrarArray($ejercicio){
    $resultado = "";
    foreach ($ejercicio as $numero) {
        $resultado .= $numero."<br/>"; //s igual a hacer ($resultado = $resultado.$numero."<br/>";
    }
    return $resultado;
}

//Crear el array

$coleccion = array();
for ($i = 0; $i <= 120; $i++){
    array_push($coleccion,$i);
}

//Recorrelo y mostrarlo
echo '<h1>RECORRER Y MOSTRAR</h1>';
echo mostrarArray($coleccion);





