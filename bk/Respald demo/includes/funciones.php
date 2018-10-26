<?php

/**********************************************************************
**  function MyPrint($nHandle, $Texto, $lSalto=true)
**        Envia una salida de texto a un archivo o a la pantalla.
**
**  Recibe como parametro: $nHandle, $Texto, $lSalto=true
**   $nHandle      : Manejador de la salida, -1 indica Screen
**   $Texto        : Texto a desplegar
**   $lSalto=true  : Agregar Salto de Linea.
**
**  Regresa : Nada
**********************************************************************/
function MyPrint($nHandle=-1, $Texto="", $lSalto=true){
   $textmp = $Texto;
   if( $nHandle < 0) {
        if( $lSalto ) $textmp .= "<br />";
        echo $textmp;
	}	
   else {
        if( $lSalto ) $textmp .= "\r\n";
        fprintf($nHandle,"%s",$textmp );  
   }	
}
/**********************************************************************/

function GrabarEnArchivo($sFile,$aData){
 $lSalida=false;
 if( $nFH = fopen($sFile , "wt+")){
     	   fwrite($nFH ,$aData);
		   fclose($nFH);
           $lSalida=true;	
  }
  return $lSalida;
}


function MoverFactura($sXMLCFDiSource,$sXMLCFDiTarget){
  $lSalida = false;
  if(file_exists($sXMLCFDiSource) && !file_exists($sXMLCFDiTarget) ){
	  $lSalida = rename($sXMLCFDiSource,$sXMLCFDiTarget);
  }
 return $lSalida;	
}

function BackUpFile($cFileNameSource,$cFileNameTarget,$PathBackup=""){
	$lSalida            = false;
	$cNewFileNameTarget = $cFileNameTarget;
	$partes_ruta        = pathinfo($cFileNameSource);
	$cPathbk            = "";
	$cBackUpTime        = "";
    if($PathBackup!=="")  $cPathbk = $PathBackup. "\\";
	$cExt = $partes_ruta['extension'];
	// date_default_timezone_set(date_default_timezone_get());
   // echo date_default_timezone_get();
	
   if($cNewFileNameTarget==""){
  	   $sSourceInfo        = basename($cFileNameSource,".".$cExt);  // Regresa Nombre sin extension y sin Path.
	   $cDate              = str_replace("x", "T", "(". date("Y-m-dxH;i;s",filemtime($cFileNameSource)).")." );   // Fecha del archivo
   	$cNewFileNameTarget = $sSourceInfo .  $cDate  .$cExt. ".bk" ;
	   if(file_exists($cPathbk . $cNewFileNameTarget)){
	       $cDate              = str_replace("x", "T", "(". date("Y-m-dxH;i's").")." );   // Fecha y hora actual
   	    $cNewFileNameTarget = $sSourceInfo .  $cDate  .$cExt. ".bk";
	   }
	}
    if(  copy($cFileNameSource, $cPathbk . $cNewFileNameTarget) ) {
   	  $lSalida=true;
    }
 	return $lSalida;
}

/**********************************************************************
**  function OpenCreateFile($sFile,$sExt=".txt")
**        Abre un archivo para escritura, si existe, 
**        lo respalda con la fecha y hora de ultima modificacion
**
**  Recibe como parametro:
**    $sFile        == nombre de archivo sin extension pero con Path incluido
**    $sExt         == Extension del archivo, por default es '.txt'
**    $cBackUpDir   == Directorio de Respaldo.
**  Regresa : 
**     $nFileHandle == Manejador de archivo para funciones fopen, fread,...
**                     En caso de error regresa -1, que seria Screen.
**********************************************************************/
function OpenCreateFile($sFile,$sExt=".txt",$cBackUpDir=""){
  $nFH=-1;
  $lResult = true;
  $sFileNew="";
  $cPath = "";
  if($cBackUpDir!==""){
      $cPath = $cBackUpDir. "\\";
  }
  if(file_exists($sFile. ".txt" )){
     $sFileNew = $sFile . date("Ymd-His",filemtime($sFile. $sExt));
	 $lResult  = rename( $sFile . $sExt, $cPath . $sFileNew . $sExt);
  } 
  if($lResult){
     if( ! ($nFH = fopen($sFile . $sExt , "ab+")))
     	   $nFH = -1;
  }
  return $nFH; 
}
/**********************************************************************/


function loadFile($sFilename, $sCharset = 'UTF-8'){
     if (floatval(phpversion()) >= 4.3) {
         $sData = file_get_contents($sFilename);
     } else {
         if (!file_exists($sFilename)) return -3;
         $rHandle = fopen($sFilename, 'r');
         if (!$rHandle) return -2;
         $sData = '';
         while(!feof($rHandle))
             $sData .= fread($rHandle, filesize($sFilename));
         fclose($rHandle);
     }
     if ($sEncoding = mb_detect_encoding($sData, 'auto', true) != $sCharset)
         $sData = mb_convert_encoding($sData, $sCharset, $sEncoding);
     return $sData;
 }

 
?> 

