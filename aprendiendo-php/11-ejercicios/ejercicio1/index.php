<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>METODO GET</title>
    </head>
    <body>
        <h1>METODO GET</h1>
        <form method="GET" action="recibedatos.php">
            <p>
                <label for="numerouno">Numero1</label>
                <input type=number name="numerouno"/>
            </p>
            <p>
                <label for="numerodos">Numero2</label>
                <input type=number name="numerodos"/>
            </p>
            <input type="submit" value="Enviar"/>
    </body>
</html>


<?php

echo "<br/>";
/* Ejercicio1
 * Crear dos variables pais y continente y mostrar su valor por pantalla
 * imprimir, y luego poner en un comentario que tipo de dato tienen
 */

$pais="Colombia";
$continente="America Latina";

echo "Pais:  $pais" ;
echo "<br/>";
echo "Continente:  $continente";

var_dump($pais);
var_dump($continente);

/* Ejercicio 2
 * Sacar todos los numeros pares que hay del 1 al 100
 */

for ($i = 1; $i <= 100; $i++){
    if($i%2 == 0){
        echo "<h1>$i</h1>";
    }
}

echo "<br/>";

/* Ejercicio 3
 * Escribir por pantalla los cuadrados de los numeros del 1 al 40
 * un cuadrado es el resultado de multiplicar un numero por si mismo
 * utilizando bucle while
 */


//FOR
$numero = 0;
for ($i = 0; $i <= 40; $i++ ){
    $numero = $i;
    echo $i*$numero."<br/>";
}

echo "<br/>";

//WHILE
$cuadrado = 0;
$i = 0;
while ($i <= 40){
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es ".$cuadrado."<br/>";
    $i++;
}

/* Ejercicio 4
 * Tomar dos numeros por la url por el metodo GET
 * y hacer todas las operaciones basicas con esos numeros
 */

/* Ejercicio 5
 * Hacer un programa que muestre todos los numeros entre dos numeros que nos
 * lleguen por la url($_GET)
 */



