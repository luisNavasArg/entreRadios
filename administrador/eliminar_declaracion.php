<html>
<head>
<meta charset="utf-8" />
<title>Eliminar declaración</title>

</head>
<body>
<?php
include('../sql/conexion.php');
require_once('../sql/Class_admin.php');
$obj=new class_admin(); 
$tituloSeleccionado = '';
$tituloSeleccionado = $_POST['elemento'];
$obj->eliminarDeclaracion($tituloSeleccionado);
$eliminarNormal = $tituloSeleccionado.'.mp3';
$eliminarComprimido = $tituloSeleccionado.'.zip';
unlink('../mp3-activo/'.$eliminarNormal.'');
unlink('../guardar/'.$eliminarComprimido);
echo 'Declaración borrada con exito '.$tituloSeleccionado.'<br> <a href="borrar_elemento.php"><< Volver>></a>';
?>
</body>
</html>
