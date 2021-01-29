<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Washington");
var_dump($persona);

$informatico = new informatico();
$informatico->setAltura(1.60);
echo $informatico-> sabeLenguajes("HTML, CSS, PHP, JS");

var_dump($informatico);


$tecnico = new TecnicoRedes();
var_dump($tecnico);
