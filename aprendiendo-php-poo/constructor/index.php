<?php
//incluir la clase coche
require_once 'coche.php';

// instanciamos el objeto
$coche = new Coche("Amarillo","Renault","Clio",150,200,5);

$coche->color ="Rosa"; //puedo modificarla porque es publica
$coche->setMarca("Audi");//es protegida para poder modificar debo crear un metodo
                         //set (setMarca en el constructor)
$coche->getModelo(); // si quiero acceder a la marca, como es private debe crear un
                     //metodo get (getModelo en el constructor)


$coche->mostrarInformacion($coche);