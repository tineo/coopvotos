<?php
	//AQUI SE DEBE CAMBIAR LAS VARIABLES DEL if vot3 vot14 vot15 vot16
	require ("rutadb.php");
	session_start();
	require ("bache.php");
	
	if ($_POST['vot13']!='' and $_POST['vot14']!='' and $_POST['vot15']!='' and $_POST['vot16']!=''){	
		$cont = mysql_query("Select * From vresultdet Where iduser='$_SESSION[iduser]' and anio='2016'",$conexion) or
		die("Problemas en el busqueda2:".mysql_error());
		$valid=mysql_num_rows($cont);
		//echo $valid;
		if ($valid==0) {

			$fech = date("d-m-Y");
			$hou = date("h:i:s");
	
			mysql_query("INSERT INTO `vresultdet` ( `vot1` , `vot2` , `vot3` , `vot4`, `iduser`, `dni`, `fecha`, `hora`, `anio`)  VALUES (
			'$_POST[vot13]', '$_POST[vot14]', '$_POST[vot15]', '$_POST[vot16]', '$_SESSION[iduser]', '$_SESSION[ddi]', '$fech', '$hou', '2016')",
			$conexion) or die("Problemas en el select".mysql_error());
			
			$mmsv="GRACIAS POR SU PARTICIPACION";
		} else {
			$mmsv="GRACIAS POR SU PARTICIPACION, PERO SU VOTO YA FUE REGISTRADO";
		}
	} else {
		header ("location: votcomit.php?v=1&mms=DEBE ELEGIR UNA OPCION POR CADA COMITE");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>ELECCIONES 2016</title>
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
<table width="482" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="23" height="2" bgcolor="#E75202"></td>
    <td width="273" bgcolor="#E75202"></td>
    <td width="181" bgcolor="#E75202"></td>
    <td width="5" bgcolor="#E74F04"></td>
  </tr>
  <tr>
    <td height="108" colspan="2" valign="top"><img src="logo-coop-nextel.jpg" width="290" height="108" /></td>
    <td align="center" valign="middle" class="tituloSERV">ELECCIONES<br />
    2016</td>
    <td></td>
  </tr>
  <tr>
    <td height="158"></td>
    <td colspan="2" valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="11" height="158">&nbsp;</td>
          <td width="820" align="center" valign="middle" class="tituloSERV"><? echo $mmsv; ?></td>
          <td width="11" align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
                  </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="14"></td>
    <td><? echo $_POST['vot9']." ".$_POST['vot10']." ".$_POST['vot11']." ".$_POST['vot12']; ?></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>