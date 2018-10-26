<?php
session_start();
$idcajero=$_SESSION['id'];
 $fecha1=$_POST['fecha1'];
		 $fecha2=$_POST['fecha2'];

require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	$fecha=date("Y-m-d ");
	 
	// Logo
	$this->Image('../../logos/logo.png',20,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	 $fecha1=$_POST['fecha1'];
		 $fecha2=$_POST['fecha2'];
	 	
	$this->Ln(20);

	$this->Cell(80);
	// Título
	$this->Cell(60,10,'REPORTE DE VENTAS EN GENERAL',0,0,'C');
	// Salto de línea
	 
 



	
	$this->SetFont('Arial','B',10);
	$this->SetFillColor(170, 183, 184);
    $this->SetTextColor(0,0,0); 
		$this->Ln(15);
	$this->Cell(80,5,'Fecha Inicial:',0,0,"R",0); 
		$this->Cell(30,5,$fecha1,0,0,"l",0); 
	$this->Cell(30,5,'Fecha Final:',0,0,"R",0);
		$this->Cell(50,5,$fecha2,0,0,"l",0); 
	$this->Ln(10);
	$this->Cell(10);
	$this->Cell(12,5,'Venta',1,0,"C",1); 
	$this->Cell(12,5,'Cajero',1,0,"C",1); 
	$this->Cell(35,5,'Articulo#',1,0,"L",1);
	$this->Cell(43,5,'Descripcion',1,0,"L",1);
	$this->Cell(23,5,'Cantidad',1,0,"L",1);
	$this->Cell(15,5,'P/U',1,0,"L",1);
	$this->Cell(18,5,'Total',1,0,"L",1);
	$this->Cell(30,5,'Descripcion',1,0,"L",1);
 	$this->Ln(5);	
	
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-35);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	
	
	 
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
		require_once "../../php/conexion.php";
	$conexion=conexion();
	
$sql0="select * from ventas where date(fecha) >='".$fecha1."' and date(fecha) <='".$fecha2."'";
 $result2=mysqli_query($conexion,$sql0);


$sql1="select sum(total) from ventas where date(fecha) >='".$fecha1."' and date(fecha) <='".$fecha2."'";

 $result3=mysqli_query($conexion,$sql1);
 while($ver3=mysqli_fetch_row($result3)){
	 
	 $total1=$ver3[0];
 }

// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
 
$c=0;    


	
while($ver2=mysqli_fetch_row($result2)){
 $id_venta=$ver2[0];
	$id_cajero=$ver2[1];
	$id_producto=$ver2[2];
	$descripcion=$ver2[3];
	$cantidad=$ver2[4];
	$pu=$ver2[5];
	$total=$ver2[6];
	$notal=$ver2[7];
 
	
			$pdf->Cell(10);
			$pdf->SetFont('Arial','',8);

	if ($c==0){
	
		$c=$c+1;
		
		$pdf->SetFillColor(255,255,255	);
	}
	else
	{
		$c=0;
	$pdf->SetFillColor(224,235,255);
	}
	
	
	
	
	$pdf->Cell(15,5,$id_venta,0,0,'',True);	
			$pdf->SetFont('Arial','',8);				
					
	$pdf->Cell(15,5,$id_cajero,0,0,'',True);	
			$pdf->SetFont('Arial','',8);				
			$pdf->Cell(30,5,$id_producto,0,0,'',True);
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(45,5,$descripcion,0,0,'',True);	
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(20,5,$cantidad,0,0,'',True);	
			
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(15,5,$pu,0,0,'',True);	
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(20,5,$total,0,0,'',True);
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(30,5,$notal,0,0,'',True);	
	
			$pdf->Ln(5);	
 }

$pdf->Ln(10);
$pdf->Cell(120	);
$pdf->SetFont('Arial','B',16);			
			$pdf->Cell(25,5,'TOTAL:',0,0,'',0);
$pdf->Cell(20,5,$total1,0,0,'',0);
$pdf->Cell(5,5,'M.N.',0,0,'',0);


$pdf->Output();
?>
