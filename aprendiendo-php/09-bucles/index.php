<?php
/*
 * bucle 
 * 
 */
$numero=0;
while($numero<=100){
    echo $numero;
    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

echo "<br/>";

/*do while
 * 
 */

$edad = 18;
$contador = 1;
do{
    echo "tienes acceso $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <= 10);