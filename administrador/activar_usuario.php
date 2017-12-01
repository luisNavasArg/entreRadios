<?php
include('../sql/conexion.php');
require_once('../sql/Class_admin.php');
$obj=new class_admin();
?>
<html>
<head>
<title>Activar Usuario</title>
<meta charset="utf-8" />
<style type="text/css">
*{
    font-size: 14px;
}
form.guardar {
    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #DDDDDD;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    width: 578px;
}
form.guardar div {
    margin-bottom: 15px;
    overflow: hidden;
}
form.guardar div label {
    display: block;
    float: left;
    line-height: 25px;
}
form.guardar div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;
}
form.guardar div input[type="submit"] {
    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    float: right;
    font-weight: bold;
    padding: 4px 20px;
}
.error{
    color: red;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}
</style>

</head>
<body>
<form action="usuario_activo.php" method="post"  class="guardar">
<div><label>Nombre del usuario: </label><?php $obj->consultarUsuariosInactivos(); ?></div>
<div><a href="index.php"> Salir</a></div>
</form>

</body>
</html> 
