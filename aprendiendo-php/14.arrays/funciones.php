<?php

$cantantes = ['2pac','Drake','U2','Alfredo'];

// mostrar el array ordenado
asort($cantantes);
// mostrar el array ordenado inverso
arsort($cantantes);

$numeros = [1,2,5,3,8,4];
//Ordenar numeros
sort($numeros);

var_dump($cantantes);
var_dump($numeros);

//anadir elementos a un array
$cantantes[] = "Natos"; // Una forma
array_push($cantantes,'Madona'); //otra forma
var_dump($cantantes);

//eliminar de un array
//elimina el ultimo elemento ingresado
array_pop($cantantes);

//elimina un registro especifico
unset($cantantes[2]);

//listar un elemento del array aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

var_dump($cantantes);

//numeros en reverso
var_dump(array_reverse($numeros));

//buscar dentro de un array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);

//contar numero de elementos
echo count($cantantes);

// tambien funciona con..
echo sizeof($cantantes);
      



