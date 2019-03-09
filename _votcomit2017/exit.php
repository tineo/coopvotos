<?Php
	session_start();
	session_destroy();
	header("Location: index.php?mms=Gracias por su participación");
?>