<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>ELECCIONES 2017</title>
<link rel="stylesheet" href="Xestilos.css" type="text/css">

<script> 
function clave(valor){
    var result = (valor)
    document.form.val.value = document.form.val.value + result
}
</script>
<script>
function limpia(li){
    document.form.val.value = "";
//    document.form.cod.value = "";
}
</script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="880" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="170" height="36">&nbsp;</td>
    <td width="290">&nbsp;</td>
    <td width="210">&nbsp;</td>
    <td width="210">&nbsp;</td>
  </tr>
  <tr>
    <td height="195">&nbsp;</td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="290" height="46">&nbsp;</td>
          <td width="210" rowspan="3" valign="top"><form id="form" name="form" method="post" action="MAIL.php">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <!--DWLayoutTable-->
                      <tr>
                        <td width="210" height="34" valign="middle" class="texto-guinda3">Recordatorio de Contraseña</td>
                      </tr>
                      <tr>
                        <td width="210" height="15" valign="middle" class="texto-plomo2">Ingresa tu numero de DNI:</td>
                      </tr>
                      <tr>
                        <td height="24" valign="middle"><input name="dni" type="text" class="texto-plomo" id="dni" size="10" maxlength="8" />                        </td>
                      </tr>

                      <tr>
                        <td height="24" valign="middle" class="textoPEQUEÑO">Nuestro sistema automaticamente te enviara un mensaje al mail consignado en tu cuenta recordando las credenciales de acceso.</td>
                      </tr>
                      <tr>
                        <td height="26" valign="middle">
                             <input type="hidden" name="act" value="1" />
                            <input name="button2" type="reset" class="BotonLOGIN" id="button2" value="Limpiar" />
                        <input type="submit" class="BotonLOGIN" value="Enviar &gt;&gt;" /></td>
                      </tr>
                    </table>
                      </form>          </td>
        </tr>
      <tr>
        <td height="108" valign="top"><img src="logo-coop-nextel.jpg" width="280" height="108" /></td>
        </tr>
      <tr>
        <td height="41">&nbsp;</td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle" class="texto-guinda3"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td colspan="2" align="center" valign="middle" class="texto-guinda3"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
