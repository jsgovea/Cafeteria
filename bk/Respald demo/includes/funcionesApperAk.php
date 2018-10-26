<?php
   require_once('includes/funciones.php');
   require_once('includes/funcionesXML.php');

class TErrorStruct { 
    var $Seq;
	var $ErrorCode;
	var $ErrorDescription;
} 


class ApperAk{
    private  $FileNameToSave="";
	public   $xmlApperAk;
	public   $NombreXMLSent;
	public   $TipoEnvio;

	public   $documentStatus;
	public   $contentVersion;
	public   $documentStructureVersion;
	public   $creationDate;
	public   $deliveryDatePresent;
	public   $uniqueCreatorIdentification;
	public   $errorDescriptions;
	public   $aErrores;
	
   function __construct($strXML="",$isFile=false) {
 	 $this->NombreXMLSent       ="";
 	 $this->TipoEnvio           ="";
	 $this->Init();
	 $this->LoadXMLApperAk($strXML,$isFile);
     return $this;
   }
   
  function Init(){
	  	$this->FileNameToSave      ="";
      	$this->xmlApperAk          ="";

		$this->documentStatus      ="";
		$this->contentVersion      ="";
		$this->documentStructureVersion="";
		$this->creationDate        ="";
		$this->deliveryDatePresent ="";
		$this->uniqueCreatorIdentification="";
		$this->errorDescriptions   ="";
		$this->aErrores            ="";
  }
   
   function LoadXMLApperAk($strXML="",$isFile=false){
	 $this->Init();
     $xml = $strXML;
	 if($strXML!==""){
         if($isFile )
	        $xml = LeerArchivoXMLCompleto($strXML);
	     $this->xmlApperAk = $xml;
 	     if($xml !== ""){
            $XMLDoc  = new SimpleXMLElement($xml);
	        $this->contentVersion                    = GetXMLAttribute($XMLDoc,"//AckErrorApplication","contentVersion");
   	        $this->documentStatus                    = GetXMLAttribute($XMLDoc,"//AckErrorApplication","documentStatus");
	        $this->documentStructureVersion          = GetXMLAttribute($XMLDoc,"//AckErrorApplication","documentStructureVersion");
	        $this->creationDate                      = GetXMLAttribute($XMLDoc,"//AckErrorApplication","creationDate");
	 
		    $this->deliveryDatePresent               = GetXMLElementByName ($xml, "deliveryDatePresent");
            $this->uniqueCreatorIdentification       = GetXMLElementByName ($xml, "uniqueCreatorIdentification");
		    if( trim($this->documentStatus)=="REJECT"){
			  $this->errorDescriptions = $XMLDoc->xpath("//AckErrorApplication/messageError");
			  $aErrores= array();
			  $strError = new TErrorStruct();
  			  $nItem = 1;
			  foreach( $this->errorDescriptions  as $oError){
                      $strError->Seq              = GetXMLAttribute($oError,"//messageError","sequence");
					  $strError->ErrorCode        = GetXMLElementByName($oError->asXML(),"errorCode");
					  $strError->ErrorDescription = GetXMLElementByName($oError->asXML(),"text");
					  $aErrores[$nItem]           = $strError;
					  $nItem++;
			  }
		   }
		   unset($XMLDoc);
       }
	 }
   }
   
   function Acepted(){
	    return (  ($this->documentStatus=="ACCEPTED") );
   }
   
   function SetApperAk($strXML="",$isFile=false){
	   $this->LoadXMLApperAk($strXML="",$isFile);
   }
   
   function AddComments($sComments){
   	  $xml       = $this->xmlApperAk;
  	  $nPos      = strpos($xml, "<?xml");
	  $sStartXML = "";
	  $sFinXML   = "";
      if ($nPos !== false) {                        // Es un archivo XML.
  	       $nPosFinDecla    = strpos($xml, "?>");    // Posicion de Fin de declaracion de XML.
		   $nPosFinComments = strpos($xml, "-->");   // Buscando si ya habia comentarios.
		   if($nPosFinComments!==false){    // Si ya habia comentarios
		      $sStartXML = substr($xml,$nPos,$nPosFinComments-1);
		      $sFinXML   = substr($xml,$nPosFinComments);
		   }
		   else{   //  Si no habia comentarios
		      $sStartXML = substr($xml, $nPos, $nPosFinDecla + 2). "\n<!--";
		      $sFinXML   = "-->\n".trim(substr($xml,$nPosFinDecla + 2));
		   }
		   $xml = trim($sStartXML) . "\n" .trim($sComments)."\n". trim( $sFinXML );
		   $this->xmlApperAk = $xml;
      }		 
   }
   
   function DatosSATToHTML(){
	   $sSalida="";

           //...	   
		   
	   return $sSalida;
   }
   
   function ListaDeErrores(){
	   
   }
   
   function ErrorsToHTML(){
	   $sSalida="";
	   if(is_array($this->aErrores)){
		   $nCount=count($aErrores);
		   foreach($aErrores as $strError ){
			   //  $strError->Seq;
			   //  $strError->ErrorCode;
			   //  $strError->ErrorDescription;
			   /*  Agregar Codigo php para despliegue*/
			   
			   
			   
			   $sSalida="";
		   }
	   }
	   return $sSalida;
	   
   }
   
}//Class ApperAk
 
?> 

