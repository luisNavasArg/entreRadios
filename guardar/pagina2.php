<html>
<head>
<meta charset="utf-8" />
<title>Declaración guardada</title>
</head>
<body>
<?php




$tipo=$_FILES['foto']['type'];
echo $tipo.'<br>';
if($tipo =='audio/mpeg'){
$nom=$_FILES['foto']['name'];
$dir=$_FILES['foto']['tmp_name'];
$titulo=$_POST['titulo'];
$tituloFinal=$titulo.'.mp3';
$tituloFinal2=$titulo.'.zip';
copy($dir,$tituloFinal);
echo "La declaración se registro con exito.<br>";
chmod($tituloFinal, 0666);
$ruta_destino_archivo = "../mp3-activo/$tituloFinal";
$archivo_ok = move_uploaded_file($dir, $ruta_destino_archivo);
require_once('../sql/Class_admin.php');
$obj=new class_admin();
$obj->conectar('host=localhost port=5432 dbname=que_onda user=postgres password=123456'); 
$declarante=$_POST['declarante'];
$fecha=date("d-m-y");
$hora=date("m:i:s");
$obj->guardarDeclaracion($declarante,$titulo,$hora,$fecha);
require_once('../mp3-activo/guardar.php');
comprimir($tituloFinal2,$tituloFinal);
echo "<br> <a href='index.php'><< Volver>></a>";	
	}else{
		echo "Audio incorrecto solo mp3 <br> <a href='index.php'><< Volver>></a>";
		} 
?>
</body>
</html>
