<!DOCTYPE Html >
	<html>
	<head>
		<meta charset="utf-8" />
		<title>Entre Radio</title>
		<meta name="keywords" content=" " />
		<meta name="description" content="noticias, Entre, radio,mp3" />
		<link href="script/css/miestilo.css" rel="stylesheet" type="text/css" media="screen" />
		<script>
			function abrir(elemento){
				inicio = document.getElementById(elemento);
				inicio.style.display= 'block';
			}
			function cerrar(elemento){
				inicio = document.getElementById(elemento);
				inicio.style.display= 'none';
			}
		</script>
	</head>
	<body>
		<div id="cabecera">
			<!-- <h1 id="titulo">Entre Radio</h1>-->
			<div id="logo">
				<img src="imagenes/png/logo.png">
				<div style="clear: both; position:relative; top:30px; left:950px;">
				<!-- <h1>Entre Radio</h1> -->
				<h2>Contactanos por los teléfonos 0416-7258329</h2>
			</div>
		</div>

		<div id="menu">
			<menu>
				<li><h1 onclick="javascript:abrir('entrar')" class="boton">Entrar</h1></li>
				<li><h1 onclick="javascript:abrir('registrar')" class="boton">Registrar </h1></li>
				<li><h1 onclick="javascript:abrir('entrarAdministrador')" class="boton">Entrar Administrador </h1></li>
			</menu>
		</div>



		<span id="entrar">
			<form  id="fomulario1" name="" method="post" action="usuarios/login_procesador.php" class="login">
			<table >
				<tr>
					<th colspan="2">Inicio de Session </th>
				</tr>
				<tr>
					<td> <div><label> Usuario</label></div></td>
					<td> <input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td> <div><label>Correo </label></div></td>
					<td> <input  name="form_email" type="email" >
					</td>
				</tr>
				<tr>
					<td> <div><label> Contraseña </label></div></td>
					<td><input type="password" name="password"> </td>
				</tr>
				<tr><td colspan="2"><div><input type="submit" name="iniciar" value="Enviar"></div></td></tr>
			</table>

			</form>
			<h3 onclick="javascript:cerrar('entrar')" class="boton"><- Cerrar -></h3>
		</span>

		<span id="registrar">
			<form  id="fomulario2" name="" method="post" action="usuarios/ingresar_usuario.php" class="login">
			<table >
				<tr>
					<th colspan="2" >Registro de Usuario </th>
				</tr>
				<tr>
					<td> <div><label>Nombre </label></div></td>
					<td> <input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td> <div><label> Apellido </label></div></td>
					<td> <input type="text" name="apellido"></td>
				</tr>
				<tr>
					<td> <div><label> Usuario</label></div></td>
					<td> <input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td> <div><label> Correo </label></div></td>
					<td> <div><input  name="form_email" type="email" ></div>
					</td>
				</tr>
				<tr>	
					<td> <div><label>Teléfono </label></div></td>
					<td> <input  name="telefono" type="text" >
					</td>
				</tr>
				<tr>
					<td><div><label> Contraseña</label></div></td>
					<td><input type="password" name="password"> </td>
				</tr>
				<tr><td colspan="2" ><div><input type="submit" name="registrar" value="Enviar"></div></td></tr>
			</table>

			</form>
			<h3 onclick="javascript:cerrar('registrar')" class="boton"><- Cerrar ->></h3>
		</span>

		<span id="entrarAdministrador">
			<form  id="fomulario3" name="" method="post" action="administrador/index.php" class="login">
			<table >
				<tr>
					<th colspan="2">Inicio de Session </th>
				</tr>
				<tr>
					<td> <div><label> Usuario</label></div></td>
					<td> <input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td> <div><label>Correo </label></div></td>
					<td> <input  name="form_email" type="email" >
					</td>
				</tr>
				<tr>
					<td> <div><label> Contraseña </label></div></td>
					<td><input type="password" name="password"> </td>
				</tr>
				<tr><td colspan="2"><div><input type="submit" name="iniciar" value="Enviar"></div></td></tr>
			</table>

			</form>
			<h3 onclick="javascript:cerrar('entrar')" class="boton"><- Cerrar -></h3>
		</span>
	</body>
</html>
