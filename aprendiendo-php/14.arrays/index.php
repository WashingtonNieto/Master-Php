<?php

/* 
 * Arrays.
 * Un array es una coleccion de valores con un unico nombre almacenado en forma
 * de matriz, para acceder a los diferente valores de esa matriz,se utiliza un
 * indice numerico o alfanumerico.
 * Un Array es una coleccion de datos, de variables
 */

//Forma 1
$peliculas = array('Batman','Spiderman','el senor de los anillos');
var_dump($peliculas[1]);
echo $peliculas[0];

//Forma 2
$cantantes = ['2pac','Drake','U2'];
var_dump($cantantes);
echo $cantantes[2];

//Recorrer un array con for
echo "<h1>LISTADO DE PELICULAS</h1>";
echo "<ul>";
for($i = 0; $i < count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

echo "<h1> LISTADO DE CANTANTES </h1>";
echo "<ul>";
//Recorrer un array con foreach
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

//arrays asociativos
$personas = array(
    'nombre' => 'Washington',
    'apellidos' => 'Nieto',
    'empresa' => 'Fianza'
);

var_dump($personas);
echo $personas['nombre'];

//Arrays multidemensionales
$contactos = array(
    array(
        'nombre' => 'Luisa',
        'apellido' => 'Nieto Gomez'
    ),
    array(
        'nombre' => 'Juan',
        'apellido' => 'Nieto Onate'
    ),
    array(
        'nombre' => 'Amy',
        'apellido' => 'Sanchez'
    )
);

var_dump($contactos);

echo $contactos[2]['apellido'];

//recorrer el array con un foreach
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
        
        
        
        
        
        
        