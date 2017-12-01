<?php

if(isset($_GET["criterio"])&& $_GET["criterio"]!=""){
	$criterio = $_GET["criterio"];
	include('../sql/conexion.php');
	$consulta = "select * from temas where declarante like '%".$criterio."%'";
	$query = pg_query($consulta);	 
	{ 
	echo '<table border=0 width="80%" align="center">
			<tr>
				<th colspan="9" align="center" >Declarante</th>
				<th colspan="9" align="center">titulo</th>
				<th colspan="9" align="center">descargar</th>
				<th colspan="9" align="center">Escuchar</th>
				<th colspan="9" align="center">Hora</th>
				<th colspan="9" align="center">Fecha</th>
			</tr>
		  ';
	while($opcion=pg_fetch_object($query)){
		echo '
		<tr>
			<td colspan="9" align="center">'.$opcion->declarante.'</td>
			<td colspan="9" align="center">'.$opcion->titulo.'</td>
			<td colspan="9" align="center">
				<a href='.$opcion->mp3.$opcion->titulo.'.zip >
					<img src="../imagenes/png/descarga.png">
				</a>
			</td>
			<td colspan="9" align="center">
				<a href='.$opcion->mp3.$opcion->titulo.'.mp3 >
					<img src="../imagenes/png/escucha.png">
				</a>
			</td>
			<td colspan="9" align="center">
				<h3>'.$opcion->hora.'</h3>
			</td>
			<td colspan="9" align="center">
				<h3>'.$opcion->fecha.'</h3>
			</td>
		</tr>';
				
		}
		echo'</table>';
	    echo '<a href="pagina_usuario.php" style="background:Cornsilk; width:250px;"> <img src="imagenes/png/recargar.png">Nueva busqueda</a>';
	 }     
	}else {alert('Debes de llenar los datos para la consulta');}
?>

