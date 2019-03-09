<?php
	//TABLAS QUE UTILIZA
	//vcomites - NOMBRE DE COMITES
	//vparticipantes - PARTICIPANTES DE TODOS LOS COMITES
	//vresultdet - GUARDA LOS RESULTADOS
	
	//NOTA SOLO PUEDEN VOTAR AQUELLOS QUE EN SU USUARIO EN EL CAMPO VOTCOMIT TENGA UN si
	require ("rutadb.php");
	session_start();
	require ("bache.php");

		$cont = mysql_query("Select * From vresultdet Where iduser='$_SESSION[iduser]' and anio='2017'",$conexion) or
		die("Problemas en el busqueda2:".mysql_error());
		$valid=mysql_num_rows($cont);
		//echo $valid;
		if ($valid!=0) {
			header ("location: exit.php");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>ELECCIONES 2017</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<table width="482" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="18" height="2" bgcolor="#E75202"></td>
    <td width="278" bgcolor="#E75202"></td>
    <td width="181" bgcolor="#E75202"></td>
    <td width="5" bgcolor="#E74F04"></td>
  </tr>
  <tr>
    <td height="108" colspan="2" valign="top"><img src="logo-coop-nextel.jpg" width="290" height="108" /></td>
    <td align="center" valign="middle" class="tituloSERV">ELECCIONES<BR />      
    2017<br />
<span class="textopequeTITULORojo">
            <? if ($_GET['v']=='1') {
		  	echo $_GET['mms'];
		  }
		  ?>
      </span></td>
    <td></td>
  </tr>
  <tr>
    <td height="96"></td>
    <form id="form1" name="form1" method="post" action="respuesta.php">
    <td colspan="2" align="center" valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <?
			//TABLA QUE DESCRIBE LOS GRUPOS DE COMITES EXISTENTES PARA VOTACION
			$consult = mysql_query("Select * From vcomites Where anio='2017'",$conexion) or die("Problemas en COMITES:".mysql_error());
			while ($consulta=mysql_fetch_array($consult))
			{
        ?>
        <tr align="left" valign="middle">
          <td width="8" height="36" bgcolor="#EBECED">&nbsp;</td>
          <td width="368" bgcolor="#EBECED" class="textope"><strong><? echo $consulta['nombre'];?></strong></td>
        </tr>
        <tr>
          <td height="25"></td>
          <td valign="top"><table width="98%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="359" height="25" align="left" valign="top"><? require ("sec.php"); ?></td>
              </tr>
          </table></td>
        </tr>
        <? } ?>
      </table>
      <input name="button" type="submit" class="textoButon" id="button" value="REGISTRAR VOTACION" />
    </td>
    </form>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="12"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>