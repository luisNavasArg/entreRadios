<?php

$user = 'queOnda';
$passwd = '123456';
$db = 'que_onda';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";

//Conectamos con PostgreSQL

/*
	$con =pg_connect($strCnx )
	or die("problemas al conectar con la base de datos ");
*/
//$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>";

?>
