<?
//error_reporting(0);
include_once("rutadb.php");
	echo 'hola';
	$us = $_POST['cod'];
	$pa = $_POST['val'];
	echo 'hola';
	//Buscando USER
	$consult = mysql_query("Select * From usuarios Where DNI='$us' and PASS='$pa'",$conexion) or
	die("Problemas en el busqueda1:".mysql_error());
	$consulta=mysql_fetch_array($consult);
		$idUS = ($consulta['IDUSER']);
		if ($idUS!='') {
			//Sentencia SQL contar usuario con ese codigo
			$busc = mysql_query("Select * From usuarios Where IDUSER='$idUS' and DNI='$us' and PASS='$pa' and VOTCOMIT='si'",$conexion) or
			die("Problemas en el busqueda2:".mysql_error());
			$array=mysql_fetch_array($busc);
			
			//realizamos un array de los campos que contienen el usuario y la contraseña
			$arrayiduser = ($array["IDUSER"]);
			$arraynom = ($array["NOMRRE"]." ".$array["APELLIDOS"]); 
			$arraynom1 = ($array["NOMRRE"]); 
			$arraymail = ($array["CORREO"]);
			$arraypass = ($array["PASS"]);
			$arrayupda = ($array["DATOS"]);
			$arraydni = ($array["DNI"]);

			if (mysql_num_rows($busc)==1) {
				//usuario y contraseña válidos
				//defino una sesion y guardo datos
		
				//Esto es para abrir seciones con codigo propio
				session_start();
				session_register("votcomit");
			    $autentificado = "SI";
				$_SESSION["iduvalcomit"]=$arrayiduser;
				$_SESSION["iduser"]=$arrayiduser;
				$_SESSION["nom"]=$arraynom;
				$_SESSION["nom1"]=$arraynom1;
				$_SESSION["mail"]=$arraymail;
				$_SESSION["updat"]=$arrayupda;
				$_SESSION["ddi"]=$arraydni;
				$_SESSION["validado"] = rand(5, 10000);
				
				$Eli = mysql_query("Delete From preorden Where IDUDER = '$arrayiduser'",$conexion) or
				die("Problemas en la Limpieza:".mysql_error());
				
			    header ("Location: votcomit.php");
			} else {
			    //si no existe le mando otra vez a la portada
			    header("Location: index.php?mms=Esta opción sólo está activa para los delegados vigentes");
			}
		} else {
		    header("Location: index.php?mms=Usuario o contraseña incorrectos");
		}
?>