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
//iniciar sesión
session_start();

if(!$_SESSION){
	echo "<script>
	alert('Usuario Incorrecto');
	self.location = 'index.php';
	</script>";
	}	
	$id_usuario = $_SESSION['id_usuario'];
	include('../sql/conexion.php');
	$consulta = "select * from usuarios where id = $id_usuario";
	$resultado = pg_query($consulta);
	$apellido=pg_fetch_object($resultado);
	$fecha=date("d-m-y");
	$hora=date("m:i:s");
	
if($apellido->status=='a'){	
include('compl_pagina_usuario.php');
	$result = pg_query ($con,"INSERT INTO visitas(id_visitas,fecha,hora)VALUES ('$id_usuario','$fecha' , '$hora');" )
	or die("Error en registro SQL");
	$result = pg_query ($con,"UPDATE usuarios SET fecha='$fecha', hora='$hora' WHERE id='$id_usuario';" )
	or die("Error en registro SQL");

		}else {	
		echo '<body style="background-color:LightYellow;"><span style="color: red; font-weight: bold; margin: 10px; text-align: center;">Usuario Inactivo comunicate por el lpipnavas@gmail.com para tu activación</span><h3><a href="../index.php">Volver al inicio</a></h3></body>';	
		
			}
?>


