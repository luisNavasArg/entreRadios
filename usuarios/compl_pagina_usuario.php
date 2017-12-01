<!DOCTYPE Html >
	<html>
	
	<head>
		<meta charset="utf-8" />
		<title>Que Onda</title>
		<meta name="keywords" content=" " />
		<meta name="description" content="ondas, entrevista, declarante,radio " />
		<link href="../script/css/miestilo.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="../script/js/autocompletar.js"  type="text/javascript"  ></script>
		<script src="../script/js/bienvenida.js"  type="text/javascript"  ></script>
	
</head>
<body >
<div id="cabecera"><!--
	<h1 id="titulo">Entre Radio</h1>-->
    <div id="logo">  
    <img src="../imagenes/png/logo.png">
    </div>   
	<div style="clear: both; position:relative; top:30px; left:950px;">
		<h1>Contactanos por los teléfonos 0416-7258329</h1>
	</div>
		<div id="bienvenido"><h1>Bienvenido <?php echo $apellido->nombre.' '.$apellido->apellido.' su última visita fué el día '.$apellido->fecha. ' a las '.$apellido->hora;?></h1>
		</div>        
</div>                  
<div id="buscarTodo" style="float:left;"></div>					
	<span id="opciones"></span>					
	<input type="text" class="criterio" id="criterio"  >					
	<a id="buscar"	href="javascript:autocompletar()">Buscar</a>  
</div>
</body>
</html>
