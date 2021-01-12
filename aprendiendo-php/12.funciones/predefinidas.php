<?php

//debugear
$nombre = "Washington Nieto";
var_dump ($nombre);

//fecha
echo date('d-M-Y');
echo "<br/>";
echo time();

//funciones matematicas
echo "<br/>";
echo "Raiz cuadrada de 10:". sqrt(10);

echo "<br/>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);

echo "<br/>";
echo "Redondear Numero: ".round(7.8342,1);

//mas funciones
//tipo de una variable
echo "<br/>";
echo gettype($nombre);

echo "<br/>";
if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}

//trim elimina espacios delante y atras
echo"<br/>";
$frase ="        mi contenido     ";
var_dump($frase);
$frase ="        mi contenido     ";
var_dump(trim($frase));

//eliminar variables o indices
echo"<br/>";
$year=2020;
unset($year);
var_dump($year);

//comprobar variable vacia
echo"<br/>";
$texto = "dddd";
if(empty($texto)){
    echo "variable vacia";
}else{
    echo "variable no vacia";
}

//contar caracteres de un string
echo"<br/>";
$cadena="12345";
echo strlen($cadena);

//encontrar palabra o caracter
echo"<br/>";
$frase = "la vida es bella";
echo strpos($frase,"es");

//Reemplazar palabra de un string
echo"<br/>";
$frase = str_replace("vida","amor",$frase);
echo $frase;

//convertir a mayusculas / minusculas
echo"<br/>";
echo strtolower($frase);
echo"<br/>";
echo strtoupper($frase);




