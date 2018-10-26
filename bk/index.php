
<HTML>
<style type="text/css"> 
body 
{ 
background: white url(paper.png) scroll;
background-image: url("images/login7.jpg"); 
background-repeat:no-repeat; 
background-position:  50% 50%; 
} 
</style>


<FONT SIZE=10>

<br>


<form action="validar_usuario.php" method="post">

<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
<br>
<br>

  <ul><TD><FONT SIZE=4>POR FAVOR INGRESE SUS DATOS</TD>
<BR />



<br><ul><table width="224" border="0">
    <tr>
      <td width="88"><FONT SIZE=3><b>Usuario: </b></FONT></td>
      <td width="120"><font size=3>
        <input type="text" name="usuario" size="20" maxlength="30" />
      </font></td>
    </tr>
    <tr>
      <td><FONT SIZE=3><b>Contrase&ntilde;a:</b></FONT>      </td>
      <td><font size=3>
        <input type="password" name="password" size="20" maxlength="20" />
      </font></td>
    </tr>
</ul>  
</table>



  <FONT SIZE=3>  </FONT></ul>

<br>
<ul><ul><ul><ul>
<input type="submit" value="Ingresar" />
</ul></ul>
</br>
<br>
<br>
<br>
<ul><ul> 

</form>
</HTML>

<?php

// enlace
			
//echo '<a href="registrar.php"><font size=3><i><ul><ul><ul>registrar</font></a></p>';
			
//Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
/*Ingreso exitoso, ahora sera dirigido a la pagina principal.
<SCRIPT LANGUAGE="javascript">
location.href = "registrar.php";
</SCRIPT>*/


?>



