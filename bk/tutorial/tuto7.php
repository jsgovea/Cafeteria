<?php
define('FPDF_FONTPATH','./');
require('../fpdf.php');
require('num_letra.php');


		 	$fecha1= $_GET['fecha'];
			$codproveedor=$_GET['codproveedor'];
			$nombre2=$_GET['nombre'];
			$autorizo=$_GET['autorizo'];
		 



$pdf=new FPDF();



$pdf->AddFont('Calligrapher','','calligra.php');
$pdf->AddPage();
$pdf->SetFont('Calligrapher','',35);
$pdf->Cell(0,10,'Enjoy new fonts with FPDF!');





$pdf->Output();
?>
