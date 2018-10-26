<?php
 require_once('includes/funciones.php');
 require_once('includes/funcionesXML.php');


class TEmpresaInfo{ 
   var $rfc               ="";
	var $nombre            ="";
	var $DomCalle          ="";
	var $DomNoExterior     ="";
	var $DomNoInterior     ="";
	var $DomColonia        ="";
	var $DomLocalidad      ="";
	var $DomMunicipio      ="";
	var $DomEstado         ="";
	var $DomPais           ="";
	var $DomCodigoPostal   ="";
} 

/*
	<cfdi:Emisor rfc="MTI9004058K8" nombre="MERRY TECH INTERNACIONAL SA DE CV">
		<cfdi:DomicilioFiscal calle="COCHIMIES" noExterior="18480" noInterior="821-D" colonia="GUAYCURA" localidad="TIJUANA" municipio="TIJUANA" estado="BAJA CALIFORNIA" pais="MEXICO" codigoPostal="22216"/>
		</cfdi:Emisor>
	<cfdi:Receptor rfc="TSO991022PB6" nombre="TIENDAS SORIANA SA DE CV">
		<cfdi:Domicilio calle="ALEJANDRO DE RODAS" noExterior="3102" noInterior="A" colonia="CUMBRES 8TVO SECTOR" localidad="MONTERREY" municipio="MONTERREY" estado="NUEVO LEON" pais="MEXICO" codigoPostal="64610"/>
		</cfdi:Receptor>
	<cfdi:Conceptos>


*/


class TInfoGeneralCFD{
  public $Comprobante ;
  public $version;
  public $serie;
  public $folio;
  public $fecha;
  public $sello;
  public $formaDePago;
  public $noCertificado;
  public $certificado;
  public $subTotal;
  public $total;
  public $metodoDePago;
  public $tipoDeComprobante;
  public $Moneda;
  public $TipoCambio;
  
  public  $SATVersion;
  public  $SATFolio;
  public  $SATFechaHora;
  public  $SATSello;
  public  $SATNoCertificado;
  public  $SATCadenaOriginal;
  
  public  $oEmpresa;
  public  $oCliente;
  public  $oApperAk;
  public  $XMLContent;
	
   function __construct($strXML,$isFile=false){
	   $xml = $strXML;
	   $this->Init();
      if($isFile){
		    $xml = LeerArchivoXMLCompleto($strXML);
			$this->XMLContent = $xml;
	  }
	  if($xml !== ""){
		  $this->XMLContent = $xml;
        $XMLDoc  = new SimpleXMLElement($xml);
     	  $ns     = $XMLDoc->getNamespaces(true);
	     $XMLDoc->registerXPathNamespace('c', $ns["cfdi"]);
	     $XMLDoc->registerXPathNamespace('t', $ns['tfd']);	
		  $this->version           = GetXMLAttribute($XMLDoc, "//c:Comprobante", "version");
        $this->serie             = GetXMLAttribute($XMLDoc, "//c:Comprobante", "serie");
  		  $this->folio             = GetXMLAttribute($XMLDoc, "//c:Comprobante", "folio");
  		  $this->fecha             = GetXMLAttribute($XMLDoc, "//c:Comprobante", "fecha");
  		  $this->sello             = GetXMLAttribute($XMLDoc, "//c:Comprobante", "sello");
  		  $this->formaDePago       = GetXMLAttribute($XMLDoc, "//c:Comprobante", "formaDePago");
  		  $this->noCertificado     = GetXMLAttribute($XMLDoc, "//c:Comprobante", "noCertificado");
  		  $this->certificado       = GetXMLAttribute($XMLDoc, "//c:Comprobante", "certificado");
  		  $this->subTotal          = GetXMLAttribute($XMLDoc, "//c:Comprobante", "subTotal");
  		  $this->total             = GetXMLAttribute($XMLDoc, "//c:Comprobante", "total");
  		  $this->metodoDePago      = GetXMLAttribute($XMLDoc, "//c:Comprobante", "metodoDePago");
  		  $this->tipoDeComprobante = GetXMLAttribute($XMLDoc, "//c:Comprobante", "tipoDeComprobante");
  		  $this->Moneda            = GetXMLAttribute($XMLDoc, "//c:Comprobante", "Moneda");
  		  $this->TipoCambio        = GetXMLAttribute($XMLDoc, "//c:Comprobante", "TipoCambio");
	     $this->oEmpresa          = $this->DatosNodoCte($XMLDoc, "Emisor");
        $this->oCliente          = $this->DatosNodoCte($XMLDoc, "Receptor");
  		  $this->SATVersion        = GetXMLAttribute($XMLDoc, "//c:Comprobante/c:Complemento/t:TimbreFiscalDigital", "version");
  		  $this->SATFolio          = GetXMLAttribute($XMLDoc, "//c:Comprobante/c:Complemento/t:TimbreFiscalDigital", "UUID");
  		  $this->SATFechaHora      = GetXMLAttribute($XMLDoc, "//c:Comprobante/c:Complemento/t:TimbreFiscalDigital", "FechaTimbrado");
  		  $this->SATSello          = GetXMLAttribute($XMLDoc, "//c:Comprobante/c:Complemento/t:TimbreFiscalDigital", "selloCFD");
  		  $this->SATNoCertificado  = GetXMLAttribute($XMLDoc, "//c:Comprobante/c:Complemento/t:TimbreFiscalDigital", "noCertificadoSAT");
  		  $this->SATCadenaOriginal = $this->CalculaSATCadenaOriginal();
	  }
	  return $this;
   }
   
   function CalculaSATCadenaOriginal(){
	   $sResult="||$this->SATVersion|$this->SATFolio|$this->SATFechaHora|$this->SATSello|$this->SATNoCertificado||";
	   return $sResult;
   }
   
   function Init(){
     $this->version           = "";
     $this->serie             = "";
     $this->folio             = "";
  	  $this->fecha             = "";
  	  $this->sello             = "";
  	  $this->formaDePago       = "";
  	  $this->noCertificado     = "";
  	  $this->certificado       = "";
  	  $this->subTotal          = "";
  	  $this->total             = "";
  	  $this->metodoDePago      = "";
  	  $this->tipoDeComprobante = "";
  	  $this->Moneda            = "";
  	  $this->TipoCambio        = "";
  	  $this->oEmpresa          = new TEmpresaInfo();
  	  $this->oCliente          = new TEmpresaInfo();
  	  $this->SATVersion        = "";
  	  $this->SATFolio          = "";
  	  $this->SATFechaHora      = "";
  	  $this->SATSello          = "";
  	  $this->SATNoCertificado  = "";
  	  $this->SATCadenaOriginal = "";
	  $this->oApperAk          = NULL;
   }

     function GetCteRFC(){
		 return $this->oCliente->rfc;
     }
	 
	 function CommentsForApperAk(){
		 $sComments = "   <MessageType>ApperAk recibido de Soriana</MessageType> " .
                      "   <FileNameUploaded>pepe.xml</FileNameUploaded> " .
                      "   <InvoiceNumber>TIJ-1003</InvoiceNumber> " .
                      "   <TipoEnvio>Produccion</TipoEnvio> " .
                      "   <InvoiceFecha>fecha=2012-03-27T13:59:28</InvoiceFecha> " .
                      "   <CompanyName>MERRY TECH INTERNACIONAL SA DE CV</CompanyName> " .
                      "   <BuyerName>TIENDAS SORIANA, S.A. DE C.V.</CompanyName> ";
	 }
	 
   
   function DatosNodoCte($XMLDoc, $NodoName=""){
	    $cInfoNodoName            = "Emisor";
	    $cInfoNodoDomicilio       = "DomicilioFiscal";
	    if($NodoName=="Receptor"){
		    $cInfoNodoName      = "Receptor";
	       $cInfoNodoDomicilio = "Domicilio";
	    }
   	 $cRutaInfoNodo            = "//c:Comprobante/c:$cInfoNodoName";
   	 $cRutaInfoDomicilio       = "//c:Comprobante/c:$cInfoNodoName/c:$cInfoNodoDomicilio";
	    $oInfo = new TEmpresaInfo();
       $oInfo->rfc               = GetXMLAttribute($XMLDoc, $cRutaInfoNodo,      "rfc");
       $oInfo->nombre            = GetXMLAttribute($XMLDoc, $cRutaInfoNodo,      "nombre");
       $oInfo->DomCalle          = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "calle");
       $oInfo->DomNoExterior     = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "noExterior");
       $oInfo->DomNoInterior     = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "noInterior");
       $oInfo->DomColonia        = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "colonia");
       $oInfo->DomLocalidad      = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "localidad");
       $oInfo->DomMunicipio      = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "municipio");
       $oInfo->DomEstado         = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "estado");
       $oInfo->DomPais           = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "pais");
       $oInfo->DomCodigoPostal   = GetXMLAttribute($XMLDoc, $cRutaInfoDomicilio, "codigoPostal");
	   return $oInfo;
   }
}     //Class TInfoGeneralCFD

class DOC_CFDi{
	private $XMLName;
	private $DocumentType;
	private $Version;
	private $DocXML;

   function __construct($strXML,$isFile=false) {
	  $this->XMLName        = "";
	  $this->DocumentType   = "";
	  $this->Version        = "";
	  $this->DocXML         = "";
      $newXML = "";
	  if($isFile){
		  $this->XMLName = $strXML;
		  $this->DocXML  = $this->LoadXML($strXML);
		  $newXML = $this->DocXML;
	  }
	  else 
	       $newXML = $strXML;
	  if( $newXML!=="" ){
		  $this->DocXML = $this->TrimXML($newXML);
	  }
	  return $this;
   }


   function TrimXML($sXML="",$isFile=false){
 	  $asXML  = $sXML;  
	  if($asXML==="") $asXML = $this->DocXML;
	  $dom    = new DOMDocument('1.0',"UTF-8"); 
      $dom->preserveWhiteSpace = false; 
      $dom->formatOutput = true; 
      $dom->loadXML($asXML); 
	  return $dom->saveXML();
   }

	function LoadXML($sXMLFile){
	  $sXML         = "";
      if( file_exists($sXMLFile)	)	{
		  $sXML = LeerArchivoXMLCompleto($sXMLFile);
		  $sXML = $this->TrimXML($sXML);
	      $this->DocXML = $sXML;
	  }
	  return $sXML;
	}
	
	function isCFDi($xml=""){
	   $vDOC = $xml;	
	   if( $xml=="") $vDOC = $this->DocXML;
	   $lResult = (strpos($vDOC,"cfdi:Comprobante") !== FALSE );
       return $lResult;
	}
	
   function ToHTML(){
	   $sSalida="";
	   /*    */
	   
	   return $sSalida;
   }
	
}//Class



class CFDiControl{
   public $RFCDoctos;
   public $clientBaseName;
   public $PathCFDi;
   public $PathCFDiBackup;
   public $PathCFDiAperAk;
   
   public $WSProd_URL;
   public $WSProd_MethodToSend;
   public $WSProd_MethodAnswer;

   public $WSInt_URL;
   public $WSInt_MethodToSend;
   public $WSInt_MethodAnswer;

   function __construct($ClientBaseName=""){
	   $this->Init($ClientBaseName);
	   return $this;
   }
  
   function Init($ClientBaseName=""){
      $this->RFCDoctos       = "";
	   $this->SetBasicParameters($ClientBaseName);

       $this->WSProd_URL            = "";
       $this->WSProd_MethodToSend   = "";
       $this->WSProd_MethodAnswer   = "";
	   
       $this->WSInt_URL             = "";
       $this->WSInt_MethodToSend    = "";
       $this->WSInt_MethodAnswer    = "";
   }
  

   function SetBasicParameters($ClientBaseName=""){
	   $ClientPath                = "";
	   if($ClientBaseName!=="")
 	      $ClientPath            = $ClientBaseName;
      $this->clientBaseName      = $ClientPath;
      $this->PathCFDi            = "CFDi\\".$ClientPath;
      $this->PathCFDiBackup      = $this->PathCFDi . "\\backup";
      $this->PathCFDiAperAk      = $this->PathCFDi . "\\apperak";
      /*
      MyPrint(-1,$this->clientBaseName);
      MyPrint(-1,$this->PathCFDi);
      MyPrint(-1,$this->PathCFDiBackup);
      MyPrint(-1,$this->PathCFDiAperAk);
      */      
   }

} //Class





?> 

