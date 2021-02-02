<?php

require_once '../vendor/autoload.php';

$frutas = array("manazanas","naranjas","sandias");

\FB::log($frutas);

$nombres = array("ejecutivo"=>"Juan","empleado"=>"Pepe");

\FB::log($nombres);

echo "Hola mundo";

\FB::log("Muestrame lo que sea!");