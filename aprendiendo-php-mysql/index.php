<?php

//conectar base de datos
$conexion = mysqli_connect("localhost","root","","Rowa");

//Comprobar conexion
if(mysqli_connect_errno()){
    echo "Fallo conexion: ".mysqli_connect_error();
}else{
    echo "conexion ok!";
}

//consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//consulta select desde php
//$notas = mysqli_query($conexion,"SELECT * FROM notas");

//var_dump($notas);
//insertar campos
$sql = "INSERT INTO notas VALUES(null, 'nota adicional','otra nota', 'green')";
$insert = mysqli_query($conexion,$sql);

if($insert){
    echo "Datos insertados correctamente";
}else {
    echo "Error: ".mysqli_error($conexion);
}