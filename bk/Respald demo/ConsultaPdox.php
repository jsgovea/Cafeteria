<?php


require_once("includes/constantes.php");

/*  
Implement class to use paradox functions  
*/  

class TMyParadox{
  public $pdox_srv      = "AAA";
  public $pdox_netctrl  = "";
  public $pdox_srv_usr  = "";
  public $pdox_srv_pass = "";
  
  public $isConnected;
  
  function __construct(){
      $this->isConnected   = false; 
  }
  
  function SetDBConnection($server, $netctrl, $netuser, $netpass){
     if($this->isConnected)
    	   $this->pdox_Disconnect();
     $this->pdox_srv      = $server;
     $this->pdox_netctrl  = $netctrl;
     $this->pdox_srv_usr  = $netuser;
     $this->pdox_srv_pass = $netpass;
  }
  
 
  function pdox_Connect(){
     $lResult             = false;
	 $this->isConnected   = true;
     return $lResult;
  }

  function pdox_Disconnect(){
	 $this->isConnected   = false;
  }


  
  function pdox_Query($sQuery){
     $rcResult = "";
     return $rcResult;
  }
 
}

function LeerArchivoCompleto($url){
   //abrimos el fichero, puede ser de texto o una URL
   $error = "";   
      $fichero_url = fopen ($url, "r");
      $texto = "";
      if($fichero_url=false){
        //bucle para ir recibiendo todo el contenido del fichero en bloques de 1024 bytes
        while ($trozo = fgets($fichero_url, 1024)){
            $texto .= $trozo;
        }
      }
     else{
        $texto="error al abrir archivo...";
     }
      return $texto;
} 


   $pdox_recurso = new TMyParadox();
   $pdox_recurso->SetDBConnection("192.168.2.2", "SCSI_VOL\\PARADOX\\PDOX45", "alonzo", "chemiluz");

   $pFile = LeerArchivoCompleto("smb://192.168.2.2/SCSI_VOL/PARADOX/PDOX45/network.txt");
//   $pFile = fopen("\\\\192.168.2.2\\SCSI_VOL\\PARADOX\\PDOX45\\network.txt","r");
   echo $pFile. "   ".  $pdox_recurso->pdox_srv;



?> 

