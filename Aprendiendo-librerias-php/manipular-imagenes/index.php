<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);
//sirve cuando en la pantalla sale error de imagen
ob_clean();

//Redimensionar
//$thumb->resize(300,300);

//Recortar
//recorte de un tamano especifico
$thumb->crop(50, 50, 120, 120);
//recorte tomando referencia desde el centro
$thumb->cropFromCenter(200,100);

$thumb->show();
$thumb->save($guardar_en);
