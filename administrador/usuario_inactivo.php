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
$usuarioDesactivar = '';
$usuarioDesactivar = $_POST['usuario'];
$obj->desactivar_usuario($usuarioDesactivar);
echo 'Usuario Inactivo '.$usuarioDesactivar.'<br> <a href="index.php"><< Volver>></a>';
?>
</body>
</html>
