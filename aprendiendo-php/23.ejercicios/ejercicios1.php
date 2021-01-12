<?php

/* 
 * Ejercicio 1
 * Crear una sesion que aumente su valor en 1 o disminuya 1 en funcion del 
 * parametro get counter esta en uno o cero 
 */
//crea la sesion
session_start();

//verifica que exista la sesion 
if(!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
}

//si es igual a 1 aumenta
if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
}

//si es igual a 0 disminuye
if(isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicios1.php?counter=1">Aumenta el valor</a><br/>
<a href="ejercicios1.php?counter=0">Disminuye el valor</a><br/>

