<?php
	require ("rutadb.php");
	session_start();
	require ("bache.php");
	
	if ($_POST['vot']==''){
		header ("location: voto.php?v=1&mms=Debe elegir un participante");
	} else {
		$cont = mysql_query("Select * From votaciondet Where iduser='$_SESSION[iduser]' and anio='2017'",$conexion) or
		die("Problemas en el busqueda2:".mysql_error());
		$valid=mysql_num_rows($cont);
		//echo $valid;
		if ($valid==0) {

			$fech = date("d-m-Y");
			$hou = date("h:i:s");
	
			mysql_query("INSERT INTO `votaciondet` ( `voto` , `iduser` , `dni` , `fecha` , `hora`, `ip`, `anio`)  VALUES (
			'$_POST[vot]', '$_SESSION[iduser]', '$_SESSION[ddi]', '$fech', '$hou', 'IP', '2017')",
			$conexion) or die("Problemas en el select".mysql_error());
			
			$mmsv="GRACIAS POR SU PARTICIPACION";
		} else {
			$mmsv="GRACIAS POR SU PARTICIPACION, PERO SU VOTO YA FUE REGISTRADO";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>ELECCIONES GENERALES 2017</title>
<META HTTP-EQUIV="Refresh" CONTENT="3;URL=exit.php">
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
<table width="880" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="2" bgcolor="#E75202"></td>
    <td width="281" bgcolor="#E75202"></td>
    <td width="572" bgcolor="#E75202"></td>
    <td width="18" bgcolor="#E74F04"></td>
  </tr>
  <tr>
    <td height="108" colspan="2" valign="top"><img src="logo-coop-nextel.jpg" width="290" height="108" /></td>
    <td align="center" valign="middle" class="texto-negro-gr">ELECCIONES GENERALES<br />
    ABRIL 2016</td>
    <td></td>
  </tr>
  <tr>
    <td height="158"></td>
    <td colspan="2" valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="11" height="158">&nbsp;</td>
          <td width="820" align="center" valign="middle" class="texto-negro-gr"><? echo $mmsv; ?></td>
          <td width="11" align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
                  </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>