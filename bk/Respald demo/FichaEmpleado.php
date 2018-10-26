<style type="text/css">
<!--
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #FFFFFF; font-weight: bold;}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #000000; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #000000; }
-->
</style>


<!--

<p>&nbsp;</p>


<table width="696" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#f6f6f4" align="right" >
    <td colspan="4" align="center" class="style7">Ficha de Empleado&nbsp;</td>
  </tr>
  <tr bgcolor="#f6f6f4" align="right" >
    <td width="117" class="style7"> <p>Nombre :&nbsp;&nbsp; </p>
    </td>
    <td width="207" align="left" class="style8">Jose Alonzo Ramirez Franco</td>
    <td width="128" class="style7">Departamento :&nbsp;&nbsp;</td>
    <td width="244" align="left" class="style8">Informacion y Sistemas</td>
  </tr>
  <tr>
    <td bgcolor="#f6f6f4" align="right" class="style7">Empleado No :&nbsp;&nbsp;</td>
    <td bgcolor="#f6f6f4" class="style8">11930</td>
    <td bgcolor="#f6f6f4" align="right" class="style7">Fecha de Ingreso:&nbsp;&nbsp;</td>
    <td bgcolor="#f6f6f4" class="style8">01/01/2000</td>
  </tr>
  <tr bgcolor="#f6f6f4" class="style7">
    <td height="224" align="right" >Imagen:&nbsp;&nbsp;</td>
    <td class="style8"><p><img src="foto1.jpg" width="205" height="225" /></p>
    </td>
    <td align="right" >&nbsp;&nbsp;</td>
    <td class="style8">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<p>
-->

<?php


require_once("includes/constantes.php");


class IB_Connection{
  private $IBConnectionStr;
  private $IBUserName;
  private $IBPassword;
  private $Conexion;
  private $RecordObject;
  private $QueryObject;

  public function initClass(){
     $this->IBConnectionStr = "";
     $this->IBUserName      = "";
     $this->IBPassword      = "";
     $this->Conexion        = null;
     $this->RecordObject    = null;
     $this->QueryObject     = null;
  }

  public function SetIBParameters($IBDBSERVERCNX,$IBUSER,$IBPASS){
     $this->IBConnectionStr = $IBDBSERVERCNX;
     $this->IBUserName      = $IBUSER;
     $this->IBPassword      = $IBPASS;
     $this->Conexion        = NULL;
     $this->RecordObject    = null;
     $this->QueryObject     = null;
  }
  
  public function DoConnect(){
      $this->Conexion     = ibase_connect($this->IBConnectionStr,$this->IBUserName,$this->IBPassword );
  }
  
  public function DisConnect(){
      ibase_free_result($this->QueryObject);
      ibase_close($this->Conexion);
  }
	  
}


class TEmpleadoInfo{
  private $IBConnectionStr;
  private $IBUserName;
  private $IBPassword;
  private $Conexion;
  private $RecordObject;
  private $QueryObject;
  
  private $Activo;
  private $Codigo;
  private $Empresa;
  private $FechaIngreso;
  private $NombreCompleto;
  private $Checa;
  private $CodCredencial;
  private $Depto;
  private $DeptoNombre;
  private $Foto;
 

  public function initClass(){
     $this->IBConnectionStr = "";
     $this->IBUserName      = "";
     $this->IBPassword      = "";
     $this->Conexion        = null;
     $this->RecordObject    = null;
     $this->QueryObject     = null;
  
     $this->Activo          = "NO";
     $this->Codigo          = 0;
     $this->Empresa         = 0;
     $this->NombreCompleto  = "";
     $this->Checa           = "NO";
     $this->CodCredencial   = "A";
     $this->Depto           = "";
     $this->DeptoNombre     = "";
     $this->Foto            = null;
     $this->$FechaIngreso   = "//";
  }

  public function DisplayInfoEmpleado(){
      $sCodigoXX = "";
      $sCodigoXX .= ' <table width="700" border="0" cellspacing="0" cellpadding="0">';
      $sCodigoXX .= '  <tr bgcolor="#f6f6f4" align="right" > ';
      $sCodigoXX .= '    <td colspan="4" align="center" class="style7">Ficha de Empleado&nbsp;</td> ';
      $sCodigoXX .= '  </tr> ';
      $sCodigoXX .= '  <tr bgcolor="#f6f6f4" align="right" > ';
      $sCodigoXX .= '    <td width="117" class="style7"> <p>Nombre :&nbsp;&nbsp; </p> ';
      $sCodigoXX .= '    </td> ';
      $sCodigoXX .= "    <td width='207' align='left' class='style8'> $this->NombreCompleto </td> " ;
      $sCodigoXX .= '    <td width="128" class="style7">Departamento :&nbsp;&nbsp;</td> ';
      $sCodigoXX .= "    <td width='244' align='left' class='style8'>$this->Depto - $this->DeptoNombre </td> ";
      $sCodigoXX .= '   </tr> ';
      $sCodigoXX .= '  <tr> ';
      $sCodigoXX .= '    <td bgcolor="#f6f6f4" align="right" class="style7">Empleado No :&nbsp;&nbsp;</td> ';
      $sCodigoXX .= "    <td bgcolor='#f6f6f4' class='style8'>$this->Codigo</td> ";
      $sCodigoXX .= '    <td bgcolor="#f6f6f4" align="right" class="style7">Fecha de Ingreso:&nbsp;&nbsp;</td> ';
      $sCodigoXX .= "    <td bgcolor='#f6f6f4' class='style8'> $this->FechaIngreso</td> ";
      $sCodigoXX .= '  </tr> ';
      $sCodigoXX .= '  <tr bgcolor="#f6f6f4" class="style7"> ';
      $sCodigoXX .= '    <td height="224" align="right" >Imagen:&nbsp;&nbsp;</td> ';
      $sCodigoXX .= '    <td class="style8"><p><img src="foto1.jpg" width="205" height="225" /></p> ';
      $sCodigoXX .= '    </td> ';
      $sCodigoXX .= '    <td align="right" >&nbsp;&nbsp;</td> ';
      $sCodigoXX .= '    <td class="style8">&nbsp;</td> ';
      $sCodigoXX .= '  </tr> ';
      $sCodigoXX .= ' </table> ';
      $sCodigoXX .= ' <p>&nbsp;</p> ';
      $sCodigoXX .= ' <p> ';
      return($sCodigoXX);
  }

  public  function LoadPicture($blob_field,$ArchivoImage){
   $blobinfo   = ibase_blob_info($blob_field);   
   $blobhandle = ibase_blob_open($blob_field);
	$totalimage = ibase_blob_get($blobhandle, 8192);
	while($data = ibase_blob_get($blobhandle, 8192)){
       $totalimage .= $data;
    }
    $ArchivoXX = fopen($ArchivoImage,"wb"); 
    fwrite($ArchivoXX, $totalimage); 
    fclose($ArchivoXX);
    return($totalimage);
  } 


  public  function DisplayPicture(){
     $sImageInfo = " <tr> <td align='center'><img src='foto1.jpg' width='100' height='100' border='0' /></td> </tr>";
     echo $sImageInfo ;
  }



/*
  public NewLoadPicture($ImageField){
    $blobinfo0   = ibase_blob_info($ImageField); 
    $blobhandle0 = ibase_blob_open($ImageField);
    for($i = 0; $i < $blobinfo0[1]; $i++){
        $readsize = $blobinfo0[2];
        if($i == ($blobinfo0[1] - 1)){
            $readsize = $blobinfo0[0] - (($blobinfo0[1] - 1) * $blobinfo0[2]);
        }
        $totalimage .= ibase_blob_get($blobhandle0, $readsize);
    }
    ibase_blob_close($blobhandle0);
    return $totalimage; 
  }

*/

  public function LoadRecord(){
  // private $lResult;
  $lResult = false;
  
  
   if (     $this->Conexion != NULL &&      $this->Conexion != FALSE ){              
     $this->RecordObject    = ibase_fetch_object($this->QueryObject);
     $this->Activo          = $this->RecordObject->CB_ACTIVO;
     $this->Codigo          = $this->RecordObject->CB_CODIGO;
     $sDate =  date($this->RecordObject->CB_FEC_ING); 
	 $sDate =  substr ( $sDate, 8,2) . "/". substr ( $sDate, 5,2) . "/". substr ( $sDate, 0,4);
	 $this->FechaIngreso    = $sDate; 
     $this->Empresa         = $this->RecordObject->CB_EMPRESA;
     $this->NombreCompleto  = $this->RecordObject->FULLNAME;
     $this->Checa           = $this->RecordObject->CB_CHECA;
     $this->CodCredencial   = $this->RecordObject->CB_CREDENC;
     $this->Depto           = $this->RecordObject->CB_DEPTO;
     $this->DeptoNombre     = $this->RecordObject->CB_DEPTO_NOMBRE;
     $this->Foto            = $this->LoadPicture( $this->RecordObject->IMAGE,"foto1.jpg");
	 $lResult=true;
  }
  else{
    $lResult=FALSE;
  }
  return($lResult);
 }

  
  public function SetIBParameters($IBDBSERVERCNX,$IBUSER,$IBPASS){
     $this->IBConnectionStr = $IBDBSERVERCNX;
     $this->IBUserName      = $IBUSER;
     $this->IBPassword      = $IBPASS;
     $this->Conexion        = NULL;
  }
  
  public function DoConnect(){
      $this->Conexion     = ibase_connect($this->IBConnectionStr,$this->IBUserName,$this->IBPassword );
  }
  
  public function DisConnect(){
      ibase_free_result($this->QueryObject);
      ibase_close($this->Conexion);
  }
  
  public  function  GetEmpleadoInfo($nEmpleado){
//private $DB_CONX;
   $DB_CONX = IB_DBSERVER . ":" . IB_DBMERRY;
   $this->SetIBParameters(IB_DBHOSTM , IB_DBUSER, IB_DBPASSWORD);
   $this->DoConnect();
   $sSQLSentence =  " SELECT  1 CB_EMPRESA,  C.CB_CODIGO,    C.CB_ACTIVO, " .
					"         C.CB_APE_MAT || ' ' || C.CB_APE_PAT || ' ' || C.CB_NOMBRES  FULLNAME, C.CB_FEC_ING, " .
					"         C.CB_CHECA   ,  C.CB_CREDENC,    C.CB_TURNO    , " .
					"         C.CB_NIVEL3  CB_DEPTO   ,  N3.TB_ELEMENT CB_DEPTO_NOMBRE, I.IM_BLOB IMAGE" .
					" FROM    COLABORA C " .
					" LEFT JOIN IMAGEN I  ON C.CB_CODIGO =  I.CB_CODIGO"  .
					" LEFT JOIN NIVEL3 n3 ON C.CB_NIVEL3 =  N3.TB_CODIGO" .
					" WHERE   c.cb_codigo = $nEmpleado and I.IM_TIPO='FOTO'";
   $this->QueryObject  = ibase_query($this->Conexion,$sSQLSentence);
   $this->LoadRecord();
   $this->DisConnect();
}
   
}  


//***************       Main Script
   $EmpleadoInfo = new TEmpleadoInfo();
   $EmpleadoInfo->GetEmpleadoInfo(24461); 
   echo $EmpleadoInfo->DisplayInfoEmpleado();
   //   $EmpleadoInfo->DisplayPicture();

?> 

