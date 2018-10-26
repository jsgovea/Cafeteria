<?php
require('../fpdf.php');
include("conectarse.php"); 
$link=Conectarse(); 
require('../fpdf.php');
 
class PDF extends FPDF
{
//Cabecera de página
function Header()
{
	//Logo
	$this->Image('logo_pb.png',10,9,33);
	//Arial bold 15
	$this->SetFont('Arial','B',15);
	//Movernos a la derecha
	$this->Cell(120);
	//Título
	$this->Cell(30,10,'Merry Tech Internacional, SA de CV - Sucursal Tijuana',0,0,'C');
	$this->Ln(17);
	$this->SetFont('Arial','b',18);
	$this->Cell(10);

	$this->Cell(10,10,'Pases sin cerrar'); 
    $this->Ln(15);	
	$this->SetFont('Arial','b',9);
	$this->Cell(1);
	
	$this->SetFillColor(0, 0, 0);
    $this->SetTextColor(255,255,255); 
	
	$this->Cell(13,5,'Folio',1,0,"L",1); 
	$this->Cell(12,5,'Emp.',1,0,"L",1);
	$this->Cell(13,5,'Depto.',1,0,"L",1);
	 
	$this->Cell(42,5,'Descripcion',1,0,"L",1);
	 
	$this->Cell(10,5,'Cant.',1,0,"L",1);
	 
	$this->Cell(13,5,'Unidad',1,0,"L",1);
 
	$this->Cell(30,5,'Concepto',1,0,"L",1);
 
	$this->Cell(32,5,'Solicitante',1,0,"L",1);
	 
	$this->Cell(28,5,'Cliente',1,0,"L",1);
 
	$this->Cell(22,5,'Tipo de pase',1,0,"L",1);
	$this->Cell(15,5,'Costo',1,0,"L",1);
	$this->Cell(20,5,'Moneda',1,0,"L",1);
   $this->Ln(4);

	
	 
 
}

//Pie de página
function Footer()
{
	//Posición: a 1,5 cm del final
	$this->SetY(-15);
	//Arial italic 9
	$this->SetFont('Arial','I',9);
	//Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Creación del objeto de la clase heredada
$pdf=new PDF('L','mm','letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetFont('Arial','',14);













$escape="N/A";
$sSQL = "SELECT * FROM pasesmuestra where CanceladoPor='".$escape."' AND MotivoCancelado='".$escape."' ORDER BY GrupoCode ";
$result2 = mysql_query($sSQL) or die(mysql_error());


while($row = mysql_fetch_array($result2)) 
{
			$folio= $row['Folio'];
		    $empleado= $row['Empleado'];
		    $Depto= $row['depto'];
			$descripcion= $row['descripcion'];
			$Cantidad= $row['Cantidad'];
			$Unidad= $row['Unidad'];
	        $Cliente= $row['Cliente'];	
			$Concepto= $row['Concepto'];
			$Solicitante= $row['Solicitante'];	
			$Autorizo= $row['Autoriza'];
			$Nota= $row['Nota'];	
			$obsequio= $row['obsequio'];
			$tipopase= $row['tipopase'];		
			$regresa= $row['regresa'];	
			$modelo= $row['Modelo'];
			$costo= $row['costo'];
			$moneda= $row['moneda']; 
				
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(2);			
			$pdf->Cell(10,10,$folio);	
		
			$pdf->Cell(2);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$empleado);	
		
			$pdf->Cell(2);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$Depto);	
		
			$pdf->Cell(3);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$descripcion);
		
			$pdf->Cell(33);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$Cantidad);	
		
			$pdf->Cell(.5);
			$pdf->SetFont('Arial','',9);				
			$pdf->Cell(10,10,$Unidad);
		
			$pdf->Cell(2);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$Concepto);	

			$pdf->Cell(20);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$Solicitante);		
			
			$pdf->Cell(22);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$Cliente);
			
			$pdf->Cell(20);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$tipopase);
			
			$pdf->Cell(10);
			
			if($costo<=0)
			{
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,"--");
			$pdf->Cell(7);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,"--");
			}
			else
			{
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,"$".$costo);
			$pdf->Cell(7);
			$pdf->SetFont('Arial','',9);			
			$pdf->Cell(10,10,$moneda);
			}	
	$pdf->Ln(5);
			
			
		}	  
		 
 
$pdf->Output();
?>
