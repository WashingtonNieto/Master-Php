<?php


require '../vendor/autoload.php';

use spipu\html2pdf\html2pdf;

$html2pdf = new html2pdf();
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
$html2pdf->output('pdf_generado.pdf');