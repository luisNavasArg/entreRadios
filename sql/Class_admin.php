<?php
class Class_admin
{
public function conectar($con){
	#Conectamos con PostgreSQL
	$connn =pg_connect($con)
	or die("problemas al conectar con la base de datos ");	
	}
	
public function guardarDeclaracion($declarante,$titulo,$hora,$fecha){
	$sqlinsertar ="INSERT INTO temas(declarante, titulo, mp3, status, hora, fecha)VALUES ('$declarante','$titulo','../guardar/',true,'$hora','$fecha')";
	$rec = pg_query($sqlinsertar);
	}
	
public function eliminarDeclaracion($tituloSeleccionado){
	$sqleliminar="DELETE FROM temas WHERE titulo='$tituloSeleccionado';";
	$elimina = pg_query($sqleliminar);	
	}
	
public function mostrarDeclaracion() {
	$consulta = "select * from temas";
	$query = pg_query($consulta);	 
		{ 
			echo '<form actiom="seleccionarTitulo.php"><select name="elemento">';
			while($opcion=pg_fetch_object($query)){
				echo '<option>'.$opcion->declarante.'</option>';				
			}
			echo'</select>';
			echo '<input name="mostrarTitulo" type="submit" value="Seleccionar"></form>';
		}     
	}
	
public function consultarDeclaraciones() {

	$consulta = "select * from temas where mp3='../guardar/'";
	$query = pg_query($consulta);	 
		{ 
			echo '<form actiom="mover_declaracion.php"><select name="elemento">';
			while($opcion=pg_fetch_object($query)){
				echo '<option>'.$opcion->titulo.'</option>';				
			}
			echo'</select>';
			echo '<input name="mostrarTitulo" type="submit" value="Seleccionar"></form>';
		}     

	}
	
public function mostrarTitulo($declaranteEliminar){
	$sqleliminar="SELECT * FROM temas WHERE declarante='$declaranteEliminar';";
	$muestra = pg_query($sqleliminar);
	{ 
		echo '<form actiom="eliminando.php"><select name="elemento"> ';
		while($opcion=pg_fetch_object($muestra)){
			echo '<option>'.$opcion->titulo.'</option>';
		}
		echo'</select>';
		echo '<input name="mostrarTitulo" type="submit" value="Seleccionar"></form>';
		} 
	}

public function consultarUsuariosInactivos(){
	$str = "SELECT * FROM usuarios WHERE status='i'";
	$resultado = pg_query($str);
	echo '<form actiom="usuario_activo.php"><select name="usuario">';
	while($usuario=pg_fetch_object($resultado)){
		echo '
			<option>'.$usuario->email.'</option>';				
		}
		echo'</select>';
	    echo '<input name="mostrarUsuario" type="submit" value="Seleccionar">
			</form>';
}

public function activar_usuario($usuarioActivar){
$sqlActivar="UPDATE usuarios SET status='a' WHERE email='$usuarioActivar'";
$activar=pg_query($sqlActivar);
}

public function moverDeclaracion($declaracionMover){
$sqlMover="UPDATE temas SET mp3='../mp3-inactivo/' WHERE titulo='$declaracionMover'";
$mover=pg_query($sqlMover);
}

public function consultarUsuariosActivos(){
	$str = "SELECT * FROM usuarios WHERE status='a'";
	$resultado = pg_query($str);
	echo '<form actiom="usuario_desactivo.php"><select name="usuario">';
	while($usuario=pg_fetch_object($resultado)){
		echo '
			<option>'.$usuario->email.'</option>';				
		}
		echo'</select>';
	    echo '<input name="mostrarUsuario" type="submit" value="Seleccionar">
			</form>';
	
	}

public function desactivar_usuario($usuarioDesactivar){
$sqlDesactivar="UPDATE usuarios SET status='i' WHERE email='$usuarioDesactivar'";
$desactivar=pg_query($sqlDesactivar);
}
function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and clave = '$password'";
    $rec = pg_query($sql);
    $count = 0;
 
    while($row = pg_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }
 
    if($count == 1)
    {
        return 1;
    }
 
    else
    {
        return 0;
    }
}



}




?>
