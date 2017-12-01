<html>
<head>
<meta charset="utf-8" />
<title>Mover declaración</title>

</head>
<body>
<?php
include('../sql/conexion.php');
require_once('../sql/Class_admin.php');
$obj=new class_admin(); 
$declaracionSeleccionada = '';
$declaracionSeleccionada = $_POST['elemento'];




$ruta_destino_archivo = "../mp3-inactivo/$declaracionSeleccionada.mp3";
$dir="../guardar/$declaracionSeleccionada.mp3";

chmod($dir, 0777);
copy($dir, $ruta_destino_archivo);
unlink($dir);


$obj->moverDeclaracion($declaracionSeleccionada);

echo 'Declaración movida con exito '.$declaracionSeleccionada.'<br> <a href="index.php"><< Volver>></a>';
?>
</body>
</html>
