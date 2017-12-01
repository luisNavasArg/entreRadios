<?php
require_once('../cabecera/cabecera.php');
session_start();
/*
include_once "/sql/conexion.php";
*/
require_once('../sql/Class_admin.php');
		$obj=new class_admin();
		$obj->conectar('host=localhost port=5432 dbname=que_onda user=postgres password=123456'); 

 
if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if($obj->verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:../administrador/index.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>
 
<style type="text/css">
*{
    font-size: 14px;
}
form.login {
    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #DDDDDD;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    width: 278px;
}
form.login div {
    margin-bottom: 15px;
    overflow: hidden;
}
form.login div label {
    display: block;
    float: left;
    line-height: 25px;
}
form.login div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;
}
form.login div input[type="submit"] {
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
 
<form action="" method="post" class="login">
    <div><label>Usuario</label><input name="user" type="text" ></div>
    <div><label>Contraseña</label><input name="password" type="password"></div>
    <div><input name="login" type="submit" value="login"></div>
</form>
<?php
} else {
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}
?>
