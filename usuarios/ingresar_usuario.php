<!DOCTYPE Html >
	<html>
	<head>
		<meta charset="utf-8" />
		<title>Entre Radio</title>
		<meta name="keywords" content=" " />
		<meta name="description" content="noticias, Entre, radio,mp3" />
		<link href="script/css/miestilo.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<?php
$usuario = $_POST["usuario"];
$clave = $_POST["password"];
$fecha=date("d-m-y");
$hora=date("H:i:s");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email= $_POST["form_email"];
$telefono= $_POST["telefono"];

if((!$usuario=='')&&(!$clave=='')&&(!$nombre=='')&&(!$apellido=='')&&(!$email=='')&&(!$telefono=='')) {
include('../sql/conexion.php');
$consulta = "select * from usuarios where email ='$email';";
	$query = pg_query($consulta);
	$opcion=pg_fetch_object($query);
	if(!$opcion){
	$result = pg_query ("INSERT INTO usuarios(usuario, clave, fecha, hora, nombre, apellido, status, email,telefono)
	VALUES ('$usuario','$clave','$fecha','$hora','$nombre','$apellido','i','$email',$telefono)")
	or die("Error en registro SQL ".pg_last_error());
	echo "<script>alert('Usuario Registrado con exito');
		self.location='../index.php'</script>";
	}else{
		echo "<script>alert('Usuario Registrado');
		self.location='../index.php'</script>";
	}

}else{
	echo "<script>alert('debes llenar los campos para registrarte');
		self.location='../index.php'</script>";
	}


?>
