<?php
			require('../fpdf.php');
			require('num_letra.php');
		 	
			 
		
			include("conectarse.php");
  			$link=Conectarse();
   include("variable4.php");
   $fecha1= $fechaentrega;
  	$autorizo=$_GET['autorizo'];
  $nombre=$_GET['nombre'];
	  $numcompra=$_GET['numcompra'];
	    $iva=$_GET['iva'];
		   $codproveedor=$_GET['codproveedor'];
		 
	 $numcompra2=substr($numcompra,4,9);
				
 $numcompra2=(string)(int)$numcompra2;
		

 
 
  $neworden= $numcompra2;
  
			$q = "UPDATE orden_temp set NumOrden='".$neworden."' where NumOrden='".$espacio."' AND user='".$nombre."'";
	
			mysql_query($q, $link) or die ("problema con query1");


			$result2 = mysql_query('SELECT * FROM orden_temp WHERE NumOrden=\''.$neworden.'\''); 

 			if($row = mysql_fetch_array($result2 ))
					{ 
					 $CodProveedor= $row['CodProveedor'];
					 $CodProducto= $row['CodProducto'];
					 $NombreProducto= $row['NombreProducto'];
					 $Descripcion= $row['Descripcion'];
					 $Cantidad= $row['Cantidad'];
					 $Unidad= $row['Unidad'];
					 $PrecUni= $row['PrecUni'];
					 $Importe= $row['Importe'];
					 $iva= $row['iva'];
					 $Moneda= $row['Moneda'];
					 $Facturar2= $row['Facturar'];
					 $FechaOrden= $row['FechaOrden'];
					 $FechaEntrega= $row['FechaEntrega'];
					 $Entregar= $row['Entregar'];					 
					}			
					
			if($Facturar2==1)
					{
					$Facturar3="MT";
					}
					
			if($Facturar2==2)
					{
					$Facturar3="FMT";
					}

	$result4 = mysql_query('SELECT * FROM Empresas WHERE IDEmpresa=\''.$Facturar2.'\''); 

	if($row2 = mysql_fetch_array($result4 ))
					{ 
					  $NombreEmpresa= $row2['NombreEmpresa'];
					   $RFC2=$row2['RFC'];
					}							 
					
	$result5= mysql_query('SELECT * FROM Empresas WHERE IDEmpresa=\''.$Entregar.'\''); 
	
	if($row2 = mysql_fetch_array($result5 ))
					{ 
					  $NombreEmpresa2= $row2['NombreEmpresa'];
					  $Domicilio2=$row2['Domicilio'];
					 
					}		

	$result3 = mysql_query('SELECT * FROM proveedores WHERE CodProveedor=\''.$CodProveedor.'\''); 
 	if($row = mysql_fetch_array($result3 ))
					{
					 $Nombre= $row['Nombre'];
					 $Contacto= $row['Contacto'];
					 $Domicilio= $row['Domicilio'];
					 $RFC= $row['RFC'];
					 $TEL= $row['TEL'];
					 $FAX= $row['Fax'];
					 $Correo= $row['Correo'];
					 $Credito= $row['Credito'];
					 $TipoCambio= $row['TipoCambio'];
					 $Moneda= $row['Moneda'];
					 
					}

					 			
class PDF extends FPDF
{
//Cabecera de p�gina
function Header()
{
    //Logo
  $this->Image('Logo1.jpg',15,12,70);
    //Arial bold 15
    $this->SetFont('Arial','B',12);
    //Movernos a la derecha
    $this->Cell(80);
    //T�tulo
    $this->Cell(110,10,'MERRY TECH INTERNACIONAL, S.A. DE C.V. ',0,0,'C');
	$this->Ln(1);
    $this->Cell(267,10,'________________________________________',0,0,'C');		
    $this->Ln(5);
	$this->SetFont('Arial','B',8);
    $this->Cell(267,10,'CALLE COCHIMIES, NO.18480, INT.821 -D. COL. GUAYCURA. ',0,0,'C');
    $this->Ln(5);
    $this->Cell(267,10,'TIJUANA B.C. C.P. 22216 R.F.C.: MTI-900405-8K8',0,0,'C');
	$this->Ln(5);
	$this->Cell(267,10,'TEL.:(664)625-1552    FAX.:(664)627-0540',0,0,'C');	   
    //Salto de l�nea
    $this->Ln(10);
	$this->SetFont('Arial','B',16);
    $this->Cell(200	,10,'ORDEN DE COMPRA',0,0,'C');
	$this->Ln(10);
}


//Pie de p�gina
function Footer()
{
    //Posici�n: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //N�mero de p�gina
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
	//Creaci�n del objeto de la clase heredada
		$pdf=new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',9);
			
			
			$pdf->Cell(2);			
			$pdf->Cell(10,10,'PROVEEDOR');	
			
			
		    $pdf->SetFont('Arial','',9);
			$pdf->Cell(15);	
			
			$pdf->SetFont('Arial','B',9);		
			$pdf->Cell(10,10,$CodProveedor);
			$pdf->Cell(70);	
			
			
			$pdf->SetFont('Arial','B',9);
	        $pdf->Cell(10,10,'ORDEN DE COMPRA:');
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(25);
			$pdf->Cell(10,10,$Facturar3."-00".$neworden);	
			$pdf->Ln(5);
			
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,$Nombre);
			
			$pdf->Cell(100);	
			$pdf->SetFont('Arial','B',9);
	        $pdf->Cell(10,10,'FECHA DE ORDEN:');
			$pdf->SetFont('Arial','',9);
		    $pdf->Cell(22);
			$pdf->Cell(10,10,date("Y-m-d G:i"));	
			
			$pdf->Ln(5);
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,'ATTN:');	
			
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(6);			
			$pdf->Cell(10,10,$Contacto);

			$pdf->Cell(84);	
			$pdf->SetFont('Arial','B',9);
	        $pdf->Cell(10,10,'FECHA DE ENTREGA:');
			$pdf->SetFont('Arial','',9);
		    $pdf->Cell(26);
			$pdf->Cell(10,10,$FechaEntrega);
			$pdf->Ln(5);
	
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,$Domicilio);
			
			$pdf->Cell(100);	
			$pdf->SetFont('Arial','B',9);
	        $pdf->Cell(10,10,'FACTURAR A:');
			
			$pdf->Ln(4);
			$pdf->Cell(107);	
			$pdf->SetFont('Arial','',9);
			
			//IF($Facturar2=="MT")
			//{
			//$FACTURAR3="MERRY TECH INTERNACIONAL S.A. DE C.V.";
			//}
			//ELSE
			//{
			//$FACTURAR3="DISTRIBUIDORA OHMAS S.A. DE C.V.";
			//}
					
			$pdf->Cell(10,10,$NombreEmpresa);
			$pdf->Ln(5);			
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,'R.F.C.:');	
			$pdf->Cell(6);	
			$pdf->SetFont('Arial','',9);		
			$pdf->Cell(10,10,$RFC);
			$pdf->Cell(84);	

			$pdf->SetFont('Arial','B',9);
	        $pdf->Cell(10,10,'ENTREGAR A:');
			$pdf->Ln(5);
		
		    $pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,'TEL:');	
			$pdf->Cell(6);	
			$pdf->SetFont('Arial','',9);		
			$pdf->Cell(10,10,$TEL);
			
			$pdf->Cell(84);	
			$pdf->SetFont('Arial','',9);
	        $pdf->Cell(10,10,$NombreEmpresa2);
		
		    $pdf->Ln(5);
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,'FAX:');	
			$pdf->Cell(6);	
			$pdf->SetFont('Arial','',9);		
			$pdf->Cell(10,10,$FAX);
					$pdf->Ln(3);	
			$pdf->Cell(107);	
			$pdf->SetFont('Arial','',6);
	        $pdf->Multicell(35,3,$Domicilio2,0,'L');
			$pdf->Ln(-2);
			$pdf->Cell(107);
				
			$pdf->Cell(10,10,'RFC: '.$RFC2);	

			$pdf->Ln(5);
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(5,10,'CONDICION DE PAGO:');	
			$pdf->Cell(32);	
			$pdf->SetFont('Arial','',9);		
			$pdf->Cell(10,10,'CREDITO DE '.$Credito.' DIAS');
			
			
			$pdf->Ln(15);
			$pdf->SetFont('Arial','b',9);
			$pdf->Cell(2);			
			$pdf->Cell(30,8,'    ARTICULO#',1,0);			
			$pdf->Cell(80,8,'                    DESCRIPCION',1,0);	
			$pdf->Cell(20,8,'CANTIDAD',1,0);			 
			$pdf->Cell(15,8,'    UNID.',1,0);	
			$pdf->Cell(22,8,'P.UNITARIO.',1,0);	 		
			$pdf->Cell(20,8,'  IMPORTE',1,0);	

			$pdf->Ln(8);
			$pdf->Cell(5);
			
		 $result5 = mysql_query('SELECT * FROM orden_temp WHERE NumOrden=\''.$neworden.'\''); 
		while($row = mysql_fetch_array($result5)) 
					{ 
					 $CodProveedor= $row['CodProveedor'];
					 $CodProducto= $row['CodProducto'];
					 $NombreProducto= $row['NombreProducto'];
					 $Descripcion= $row['Descripcion'];
					 $Cantidad= $row['Cantidad'];
					 $Unidad= $row['Unidad'];
					 $PrecUni= $row['PrecUni'];
					 $Importe= $row['Importe'];
					 $iva= $row['iva'];
					 $Moneda= $row['Moneda'];
					 $Facturar2= $row['Facturar'];
					 $FechaOrden= $row['FechaOrden'];
					 $FechaEntrega= $row['FechaEntrega'];
					 $Entregar= $row['Entregar'];
					
					 $pdf->SetFont('Arial','',9);		
			         $pdf->Cell(10,10,$CodProducto);
					 $pdf->Cell(20);
 					 $pdf->SetFont('Arial','',7);
					 $pdf->cell(10,10,$Descripcion);
					 $pdf->SetFont('Arial','',9);
					 $pdf->Cell(73);
					 $pdf->Cell(10,10,$Cantidad);
					 $pdf->Cell(7);
					 $pdf->Cell(10,10,$Unidad);
					 $pdf->Cell(7);
					 
					 $r1= number_format($PrecUni, 2, ".", ","); 
					 $pdf->Cell(10,10,'$'.$r1);
					 $pdf->Cell(9);
					 

					 $r2= number_format($Importe, 2, ".", ","); 
					 $pdf->Cell(18,10," $      ".$r2,0,0,"R");
					 $pdf->Ln(5);
					 $pdf->Cell(5); 
					
					 $Subtotal=$Subtotal+$Importe; 
					 
					 $r3= number_format($Subtotal, 2, ".", ","); 
					 
					 
					}	
					$pdf->Cell(-4);		
					$pdf->Cell(5,10,'__________________________________________________________________________________________________________');
			
					 $pdf->Ln(5);
		 			 $pdf->Cell(150);
					
					 $pdf->Cell(10,10,'Subtotal:         $');
  					 $pdf->Cell(10);
						$pdf->SetFont('Arial','',9);
		 			 $pdf->Cell(19,10,$r3,0,0,"R");
			
		
switch ($iva) {
    case 11:
        $iva2=0.11;
        break;
    case 12:
        $iva2=0.12;
        break;
    case 13:
        $iva2=0.13;
        break;
    case 14:
        $iva2=0.14;
        break;

    case 15:
        $iva2=0.15;
        break;

    case 16:

        $iva2=0.16;
        break;

}
			
				IF($Moneda=="M.A.")
			{
			$MONEDA2="DOLARES";
			}
			ELSE
			{
			$MONEDA2="PESOS";
			}

			$IVA2=$Subtotal*$iva2;
			
				$IVA3=round($IVA2,2);
				
					 $r4= number_format($IVA3, 2, ".", ","); 
			
			$pdf->Ln(5);
			$pdf->Cell(150);
			$pdf->Cell(10,10,'IVA '.$iva.' %:       $');
			$pdf->Cell(10);
$pdf->SetFont('Arial','',9);
			$pdf->Cell(19,10,$r4,0,0,"R");
			
			$TOTAL=$Subtotal+$IVA2;
			
			
			
			$TOTAL2=round($TOTAL,2);
			
			$r5= number_format($TOTAL2, 2, ".", ",");
			$pdf->Ln(5);
			$pdf->Cell(150);
			$pdf->Cell(10,10,'TOTAL:          $');
			$pdf->Cell(10);

$pdf->SetFont('Arial','',9);
			$pdf->Cell(19,10,$r5,0,0,"R");
			$numero = $TOTAL; 
			$pdf->Ln(10);
			
			$pdf->SetFont('Arial','B',9);
      	    $pdf->Cell(10,10,'TOTAL:');
			$pdf->Cell(3);
			$cadena1 = $TOTAL2;
			$cadena2 = ".";
			$cadena3= strstr($cadena1,$cadena2);
			$cadena4=str_replace(".","",$cadena3);  
	
	 $cadena5=substr($r5,-2);
	 
	 
	
	
	
	
	

			  $pdf->Cell(10,10,strtoupper(num2letras($numero)).' '.$MONEDA2. '  '.$cadena5.'/100'.' '.$Moneda);
			  $pdf->Ln(10);
			  $pdf->Cell(70);
			  $pdf->Cell(10,10,'MERRY TECH INTERNACIONAL S.A. DE C.V.');
			  $pdf->Ln(10);			
			  $pdf->SetFont('Arial','',9);	
			  $pdf->Cell(10,10,'***NOTA:***');
		      $pdf->Ln(5);
		 	  $pdf->Cell(10,10,'FAVOR DE FIRMAR Y REGRESAR POR');
			  $pdf->Ln(5);
			  $pdf->Cell(10,10,'FAX PARA CONFIRMAR LA ENTREGA');
			 
			  $pdf->Ln(2);
			  $pdf->Cell(70);
			  $pdf->Cell(10,10,'___________________');
			  $pdf->Cell(40);
			  $pdf->Cell(10,10,'___________________');
			  
			  $pdf->Ln(5);
			  $pdf->Cell(70);
			  $pdf->Cell(10,10,'ORDENADO POR:');
			  $pdf->Cell(40);
			  $pdf->Cell(10,10,'APROBADO POR:');
			  
			  $pdf->Ln(5);
			  $pdf->Cell(70);
			  $pdf->Cell(10,10,$nombre);
			  $pdf->Cell(40);
	 		  $pdf->Cell(10,10,$autorizo);
	//echo "<strong>$numero</strong> se dice: <strong>".num2letras($numero)."</strong><br>";
			 $pdf->Output();
?>
