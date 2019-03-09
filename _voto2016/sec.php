<?
//include('rutadb.php');

	//echo "FUNCIONA";
	
   $registros = 120;
   $columnas = 3; // Definición cantidad de columnas en las que se mostraran los productos de determinada categoría
if ($_REQUEST[pagina]=='') 
{
   $inicio = 0;
   $pagina = 1;
} else {
   $inicio = ($registros * $_REQUEST['pagina']) - $registros;
   $pagina = $_REQUEST['pagina'];
}
	$consultar=mysql_query("SELECT * FROM votacion Where anio='2016'", $conexion); //$_GET['catcod'] = variable a ser pasada por URL
	$total_registros = mysql_num_rows($consultar);
	$total_paginas = ceil($total_registros / $registros);
  //AQUI EL FILTRO DE DATOS	
	$consultar = mysql_query("SELECT * FROM votacion Where anio='2016' ORDER BY NOMBREAPELLIDO ASC LIMIT $inicio, $registros");
  //AQUI TERMINA MI FILTRO DE DATOS
if ($arregloproducto=mysql_fetch_array($consultar))
{
	echo "<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\">";
	echo "<tr>";
	$nCol = 1; // contador de columnas
	do 
	{
      if ($nCol <= $columnas)
	  {
		//---------------
    	    echo '<td width="27" valign="top">';
			echo '<table width="275" border="0" cellpadding="0" cellspacing="0">';
              echo '<!--DWLayoutTable-->';
              echo '<tr class="sobre">';
                echo '<td width="11" height="27">&nbsp;</td>';
                echo '<td width="237" align="left" valign="middle" class="textoPEQUE&Ntilde;O">'.$arregloproducto['NOMBREAPELLIDO'].'</td>';
                echo '<td width="27" align="center" valign="middle"><input name="vot" type="radio" class="textoButon" id="vot" value="'.$arregloproducto['IDPARTICIPANTE'].'" /></td>';
              echo '</tr>';
            echo '</table>';
            echo '</td>';
		//---------------
		 $nCol = $nCol + 1;
		 if ($nCol > $columnas)
		 {
  		    $nCol = 1;
   		    echo "</tr>"; //se cierra la fila actual
		    echo "<tr>"; //se abre una nueva fila			
		 }	
      }		 
	} while ($arregloproducto=mysql_fetch_array($consultar));
    if ($nCol <= $columnas) //Si la condición no se cumplió en el ciclo anterior me aseguro de cerrar la Fila que quedo abierta
	{
       echo "</tr>";
	}	
	echo "</table>";
}
else
{
 echo "<div align='center'><span class='texto-negro-gr'><br><br><br><label class='tituloSERV'>NO SE ENCONTRARON POSTULANTES</label></span>";
}
?> 