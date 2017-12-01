<?php

$variable='';
   if (isset($_POST['ejecutar']))
   $variable = $_POST['elemento'];   
   
   if ($variable=='activar Usuario'){
echo "<script>self.location='activar_usuario.php'</script>";   

echo "$contenido"; 
}else if ($variable=='Desactivar Usuario'){
	echo "<script>self.location='desactivar_usuario.php'</script>";

 }else if ($variable=='Mover Declaración'){
	echo "<script>self.location='consultar_declaraciones.php'</script>";

 }else if ($variable=='Subir Declaración'){
$ruta = "../guardar/index.php";	
$contenido = file_get_contents( $ruta);
echo "$contenido";   

  }else if ($variable=='Eliminar Declaración'){

echo "<script>self.location='borrar_elemento.php'</script>";

}else{



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

 
<form action="index.php" method="post" class="login">
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
}
