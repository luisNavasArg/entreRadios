<html>
<head>
<title>Usuario Activo</title>
<meta charset="utf-8" />
</head>
<body>
<?php
include('../sql/conexion.php');
require_once('../sql/Class_admin.php');
$obj=new class_admin(); 
$usuarioSeleccionado = '';
$usuarioSeleccionado = $_POST['usuario'];
$obj->activar_usuario($usuarioSeleccionado);
echo 'Usuario activo '.$usuarioSeleccionado.'<br> <a href="activar_usuario.php"><< Volver>></a>';
?>
</body>
</html>
