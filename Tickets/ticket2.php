
<?php



require __DIR__ . '/ticket/autoload.php'; //Nota: si renombraste la carpeta a algo diferente de "ticket" cambia el nombre en esta línea
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/*
	Este ejemplo imprime un
	ticket de venta desde una impresora térmica
*/


/*
    Aquí, en lugar de "POS" (que es el nombre de mi impresora)
	escribe el nombre de la tuya. Recuerda que debes compartirla
	desde el panel de control
*/

$nombre_impresora = "impresoraticket"; 


$connector = new WindowsPrintConnector($nombre_impresora);
$printer = new Printer($connector);
#Mando un numero de respuesta para saber que se conecto correctamente.
echo 1;
/*
	Vamos a imprimir un logotipo
	opcional. Recuerda que esto
	no funcionará en todas las
	impresoras

	Pequeña nota: Es recomendable que la imagen no sea
	transparente (aunque sea png hay que quitar el canal alfa)
	y que tenga una resolución baja. En mi caso
	la imagen que uso es de 250 x 250
*/

# Vamos a alinear al centro lo próximo que imprimamos
$printer->setJustification(Printer::JUSTIFY_CENTER);

/*
	Intentaremos cargar e imprimir
	el logo
*/
try{
	$logo = EscposImage::load("Tickets\cesun_logo.png", false);
    $printer->bitImage($logo);
}catch(Exception $e){/*No hacemos nada si hay error*/}

/*
	Ahora vamos a imprimir un encabezado
*/ 

$printer->text("\n"."Universidad y Preparatoria CESUN" . "\n");
$printer->text("Direccion: Blvd. Cucapah Sur # 20100" . "\n");
$printer->text("Tel: 9034115" . "\n");
#La fecha también
date_default_timezone_set("America/Mexico_City");
$printer->text(date("Y-m-d H:i:s") . "\n");
$printer->text("-----------------------------" . "\n");
$printer->text("***SALDO PAGADO***\n");
$printer->text("***$nombre_cliente***\n");
$printer->text("-----------------------------" . "\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->text("CANT  DESCRIPCION    P.U   IMP    FECH.\n");
$printer->text("-----------------------------"."\n");
/*
	Ahora vamos a imprimir los
	productos
*/

	require_once "conexion.php";
	$conexion2=conexion2();
$conexion3=conexion2();
 $idcajero=$_SESSION['id'];
	//$sql="select max(id_venta) from ventas where id_cajero=$idcajero";

		


$sql="call consultaticket2($id_cliente2)";
$result=mysqli_query($conexion2,$sql);
				while($ver=mysqli_fetch_row($result)){ 

 $id_venta=$ver[0];
 $id_cajero=$ver[1];
$id_producto=$ver[3];
$descripcion=$ver[4];
$cantidad=$ver[5];
$pu=$ver[6];
$total=$ver[7];
$nota=$ver[8];
					$fecha= date("d-m-Y",strtotime($ver[9]));
	/*Alinear a la izquierda para la cantidad y el nombre*/
	/*$printer->setJustification(Printer::JUSTIFY_LEFT);
    $printer->text("Producto Galletas\n");
    $printer->text( "2  pieza    10.00 20.00   \n");
    $printer->text("Sabrtitas \n");
    $printer->text( "3  pieza    10.00 30.00   \n");
    $printer->text("Doritos \n");
    $printer->text( "5  pieza    10.00 50.00   \n");*/
					$printer->setJustification(Printer::JUSTIFY_LEFT);
    $printer->text("$descripcion \n");
    $printer->text( "$cantidad  pieza    $pu $total     $fecha   \n");
				}
	
/*
	Terminamos de imprimir
	los productos, ahora va el total
*/
$printer->text("-----------------------------"."\n");
$printer->setJustification(Printer::JUSTIFY_LEFT);
//$printer->text("SUBTOTAL: $100.00\n");
//$printer->text("IVA: $16.00\n");
require_once "conexion.php";
		$sql5="call totalticket2($id_cliente2)";
$result5=mysqli_query($conexion3,$sql5);
	while($ver2=mysqli_fetch_row($result5)){ 
		 $total_apagar=$ver2[0];
	}

$printer->text("TOTAL: $total_apagar M.N. \n\n");


/*
	Podemos poner también un pie de página
*/
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->text("Muchas gracias por su compra\n");



/*Alimentamos el papel 3 veces*/
$printer->feed(3);

/*
	Cortamos el papel. Si nuestra impresora
	no tiene soporte para ello, no generará
	ningún error
*/
$printer->cut();

/*
	Por medio de la impresora mandamos un pulso.
	Esto es útil cuando la tenemos conectada
	por ejemplo a un cajón
*/
$printer->pulse();

/*
	Para imprimir realmente, tenemos que "cerrar"
	la conexión con la impresora. Recuerda incluir esto al final de todos los archivos
*/
$printer->close();

?>