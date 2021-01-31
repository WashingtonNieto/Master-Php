<?php
require '../vendor/autoload.php';

use spipu\html2pdf\html2pdf;

$html2pdf = new html2pdf();

$html = "<h1>Hola Mundo desde una libreria de PHP para hacer PDFs</h1>";
$html .= "<p>Master en PHP</p>";

$html2pdf->writeHTML($html);
$html2pdf->Output('pdf_generado.pdf');