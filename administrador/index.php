<?php
$usuario = $_POST["usuario"];
$clave = $_POST["password"];
$fecha=date("d-m-y");
$hora=date("H:i:s");
$email= $_POST["form_email"];
if((!$usuario=='')&&(!$clave=='')&&(!$email=='')) {
	include('../sql/conexion.php');
	$consulta = "select * from usuarios where email ='$email'and usuario='$usuario' and clave='$clave';";
	$query = pg_query($consulta);
	$opcion=pg_fetch_object($query);
/*
	if(!$query){echo "excelente";}else echo "<script>alert('usuario Incorrecto'); self.location='../index.php'</script>";
*/
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

 
<form action="login_adminsitrador.php" method="post" class="login">
    <div>
		<label>Acciones</label>
		
		<select name="elemento">
			<option>activar Usuario</option>
			<option>Desactivar Usuario</option>
			<option>Subir Declaración</option>
			<option>Eliminar Declaración</option>
			<option>Mover Declaración</option>
		</select>
		
    </div>
    
    <div><input name="ejecutar" type="submit" value="Ejecutar"></div>
</form>
<?php

}else {
	echo "<script> document.write('Usuario o clave Incorrecto'); self.location='../index.php'; </script>";
	}

?>

