<?php
if(!isset($_SESSION)){
	session_start();
	}
$nombre= $_POST["nombre"];
$password= $_POST["password"];
$form_email= $_POST["form_email"];
if((!$nombre=='')&&(!$password=='')&&(!$form_email=='')){
include('../sql/conexion.php');
	$consulta = "select * from usuarios where usuario ='$nombre' and clave='$password'and email='$form_email';";
	$query = pg_query($consulta);
	$opcion=pg_fetch_object($query);

	if(!$opcion){
		echo "<script>alert('Usuario o Clave Incorrecto');
		self.location='../index.php'</script>";
	}else{
		$_SESSION['id_usuario'] =$opcion->id;
		$_SESSION['nombre'] = $opcion->nombre;
		header("Location:pagina_usuario.php");

	}
}

?>
