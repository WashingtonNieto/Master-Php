<?php

/* 
 * Ejercicio 1
 * Hacer un programa con un array que tenga 8 numeros enteros y hacer:
 * recorrerlo y mostrarlo
 * ordenarlo y mostrarlo
 * mostrar su longitud
 * hacer una busqueda de un numero entrado por get
 */


//FUNCIONES
function mostrarArray($ejercicio){
    $resultado = "";
    foreach ($ejercicio as $numero) {
        $resultado .= $numero."<br/>"; //s igual a hacer ($resultado = $resultado.$numero."<br/>";
    }
    return $resultado;
}


//array con 8 numeros
$ejercicio = array(8,4,7,43,77,1,9,6);
foreach ($ejercicio as $numero) {
    echo $numero.'<br/>';
};

//Recorrelo y mostrarlo
echo '<h1>RECORRER Y MOSTRAR</h1>';
echo mostrarArray($ejercicio);

//Ordenarlo y mostrarlo
echo '<h1>ORDENAR Y MOSTRAR</h1>';
asort($ejercicio);
var_dump($ejercicio);
echo mostrarArray($ejercicio);

//Logitud y mostrarlo
echo count($ejercicio);
echo '<hr/>';

//hacer busqueda
$resultadoBusqueda = array_search(43, $ejercicio);
echo $resultadoBusqueda;

echo '<hr/>';
      
//hacer busqueda - otra forma
if(isset($_GET['numero'])){
    
    $busqueda = $_GET['numero'];
    
    echo "<h1>Buscar en el array el numero $busqueda</h1>";

    $search = array_search($busqueda, $ejercicio);

    if(!empty($search)){
        echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
    }else{
        echo "No existe el numero buscado";
    }
}