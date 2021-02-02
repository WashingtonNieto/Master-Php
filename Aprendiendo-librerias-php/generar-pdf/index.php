<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//conseguir el codigo de html que dentro de un php
//Recoger la vista a imprimir
//Se abre el ob_start, lo halla despues del ob_start, si yo imprimo algo
//lo va a recoger... y lo guardo en un $html
//es decir: 
//todo lo que haya entre ob_star() y $html=ob_get_clean lo voy a capturar
ob_start();
require_once 'pdf_para_generar.php';

//para que lo muestre
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->Output('pdf_generado.pdf');