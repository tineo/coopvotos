<?
session_start();
if ($_SESSION['iduser']!='') {
	header ("Location: votcomit.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>ELECCIONES 2016</title>
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
.Estilo1 {
	font-size: 28px
}
-->
</style>
</head>

<body>
<table width="482" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="36">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td width="259">&nbsp;</td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="195">&nbsp;</td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="290" height="87" align="center" valign="middle" class="texto-negro-gr Estilo1">ELECCIONES<br />
        2016</td>
          <td width="210" rowspan="2" valign="top"><form action="control.php" method="post" enctype="application/x-www-form-urlencoded" name="form">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td height="34" colspan="3" align="left" valign="middle" class="texto-guinda3">Ingresa a tu cuenta</td>
              </tr>
              <tr>
                <td height="16" colspan="3" valign="middle"class="texto-plomo2"><strong>Ingresa tu c&oacute;digo de usuario:</strong></td>
              </tr>
              <tr>
                <td height="24" colspan="3" valign="middle"><input class="texto-plomo" type="text" name="cod" id="cod" size="10" maxlength="8"/></td>
              </tr>
              <tr>
                <td height="20" colspan="3" valign="middle"><strong class="texto-plomo2">Ingresa tu contrase&ntilde;a:</strong></td>
              </tr>
              <tr>
                <td width="73" rowspan="2" valign="top"><table width="73" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(1)">1</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(2)">2</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(3)">3</a></td>
                    </tr>
                    <tr>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                      <td width="25" height="20" align="center" bgcolor="#E8E6F1"><a class="NumerosLOGIN" onclick="clave(4)">4</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(5)">5</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(6)">6</a></td>
                    </tr>
                    <tr>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(7)">7</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E6F1"><a class="NumerosLOGIN" onclick="clave(8)">8</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td width="25" height="20" align="center" bgcolor="#E8E7EF"><a class="NumerosLOGIN" onclick="clave(9)">9</a></td>
                    </tr>
                    <tr>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                      <td width="1" height="1" bgcolor="#FFFFFF"></td>
                      <td width="25" height="1" bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr align="center">
                      <td width="25" height="20" bgcolor="#E8E6F1"><a class="NumerosLOGIN" onclick="clave(0)">0</a></td>
                      <td width="1" height="20" bgcolor="#FFFFFF"></td>
                      <td height="20" colspan="3" bgcolor="#666666"><a class="link-blanco2" onclick="limpia()">Limpiar</a></td>
                    </tr>
                </table></td>
                <td width="12" height="8"></td>
                <td width="125"></td>
              </tr>
              <tr>
                <td height="75"></td>
                <td valign="top"><table width="125" border="0" cellspacing="0" cellpadding="0">
                    <!--DWLayoutTable-->
                    <tr class="textoPEQUEÑO">
                      <td class="textoPEQUE&Ntilde;O">Ingresa los 6 d&iacute;gitos de tu clave secreta</td>
                    </tr>
                    <tr>
                      <td height="28" align="left"><input class="texto-plomo" type="password" name="val" id="val" size="10" maxlength="6" onfocus="this.blur()"/>                      </td>
                    </tr>
                    <tr>
                      <td align="left"><input name="button" type="submit" class="BotonLOGIN" id="button" value="Ingresar" />                      </td>
                    </tr>
                </table></td>
              </tr>
            </table>
                      </form>          </td>
        </tr>
      <tr>
        <td height="108" align="center" valign="middle"><img src="logo-coop-nextel.jpg" width="290" height="108" /></td>
        </tr>
      

      
      
      
      
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19" align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top"><a href="recordar.php" class="texto-guinda2">&iquest;Olvidaste tu contrase&ntilde;a? Ingresa aqu&iacute;</a></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" align="center" valign="top">&nbsp;</td>
    <td colspan="2" align="center" valign="top" class="texto-guinda3"><? echo $_GET['mms']; ?></td>
    <td align="center" valign="top"></td>
  </tr>
</table>
</body>
</html>
