<?php
	require ("rutadb.php");
	session_start();
	require ("bache.php");

		$cont = mysql_query("Select * From votaciondet Where iduser='$_SESSION[iduser]' and anio='2016'",$conexion) or
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
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>ELECCIONES GENERALES 2016</title>
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
<table width="870" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="2" bgcolor="#E75202"></td>
    <td width="281" bgcolor="#E75202"></td>
    <td width="555" bgcolor="#E75202"></td>
    <td width="25" bgcolor="#E74F04"></td>
  </tr>
  <tr>
    <td height="108" colspan="2" valign="top"><img src="logo-coop-nextel.jpg" width="290" height="108" /></td>
    <td align="center" valign="middle" class="texto-negro-gr">ELECCIONES GENERALES<br />
    ABRIL 2016</td>
    <td></td>
  </tr>
  <tr>
    <td height="73"></td>
    <td colspan="2" valign="top"><form id="form1" name="form1" method="post" action="respuesta.php">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="11" height="36" bgcolor="#EBECED">&nbsp;</td>
          <td width="764" valign="middle" bgcolor="#EBECED" class="textoPEQUE&Ntilde;O"><strong>LISTA DE PARTICIPANTES <span class="textopequeTITULORojo">
            <? if ($_GET['v']=='1') {
		  	echo $_GET['mms'];
		  }
		  ?>
          </span></strong></td>
          <td width="61" align="center" valign="middle" bgcolor="#EBECED"><input name="button" type="submit" class="textoButon" id="button" value="Votar" /></td>
        </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="825" height="25" align="center" valign="top"><? require ("sec.php"); ?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="12"></td>
          <td></td>
          <td></td>
        </tr>
      </table>
          </form>    </td>
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