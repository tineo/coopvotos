<?
include('rutadb.php');
	$consult = mysql_query("Select * From usuarios Where DNI='$_POST[dni]'",$conexion) or
	die("Problemas en el select:".mysql_error());
	while ($consulta=mysql_fetch_array($consult))
	{
		$var1 = $consulta['NOMRRE'].''.$consulta['APELLIDOS'];
		$var2 = $consulta['CORREO'];
		$var3 = $consulta['PASS'];
//$destinatario = yoel.velasquez@gmai.com;
$destinatario = $var2;
$asunto = "Recordatorio - Credenciales de Acceso";
$cuerpo = '
<link rel="stylesheet" type="text/css" href="http://www.cooperativaentel.com.pe/es/estilos.css"/>
<html>
<head>
<title>Prueba de correo</title>
</head>
<body>
<h1><img src="http://www.cooperativaentel.com.pe/es/graficos/logo-coop-nextel.jpg" width="160" height="61"></h1>
<span class="texto-plomo2">Saludos <strong>'.$var1.'</strong>, te recordamos que tus datos de acceso a <a href="http://www.cooperativaentel.com.pe">http://www.cooperativaentel.com.pe</a> son:</span><b><br>
<br>
<span class="textoPEQUEÑO">&nbsp;&nbsp;&nbsp;</span></b><span class="texto-plomo2">Usuario:</span> <span class="texto-guinda3">'.$_POST[dni].'</span><b><br>
<span class="texto-plomo2">&nbsp;&nbsp;&nbsp;</span></b><span class="texto-plomo2">Clave:</span> <span class="texto-guinda3">'.$var3.'</span><br>
<br>
<span class="texto-plomo2">No respondas a este mensaje, este mensaje es enviado por nuestro sistema automatico<br>
<br>
Y recuerda que puedes hacer uso de tus servicios y realizar consultas a travez de <a href="http://www.cooperativaentel.com.pe">http://www.cooperativaentel.com.pe</a></span>
</body>
</html>
'; }

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: Cooperativa Nextel <robot@cooperativaentel.com.pe>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: robot@cooperativaentel.com.pe\r\n";

//ruta del mensaje desde origen a destino
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n";

//direcciones que recibián copia
//$headers .= "Cc: maria@desarrolloweb.com\r\n";

//direcciones que recibirán copia oculta
//$headers .= "Bcc: yvelasquez@ks.comp.pe,juan@juan.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)

?> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?mms=Tu contrase&ntilde;a ha sido enviada a tu mail registrado.">