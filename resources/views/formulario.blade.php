<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link rel="stylesheet" href="/css/estilos2.css">
</head>

<body>
	<div>
		<h2>Contacto</h2>
		<form action="/informacion" id="formulario" method="POST">
			@csrf
			<label for="nombre">Nombre: </label>
			<input type="text" maxlength="50" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
			<br><br>
			<label for="correo">Correo: </label>
			<input type="email" id="correo" name="correo" placeholder="ejemplo@gmail.com" value="{{old('correo')}}" required>
			<br><br>
			<label for="contraseña">Contraseña: </label>
			<input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
			<br><br>
			<label for="genero">Género: </label>
			<input type="radio" id="generof" name="genero" value="F">Femenino
			<input type="radio" id="generom" name="genero" value="M">Masculino
			<br><br>
			<textarea name="observaciones" rows="5" cols="30" placeholder="Observaciones." value="{{old('observaciones')}}"></textarea>
			<br>
			<input type="submit" class="button" value= "Agendar">
		</form>

	</div>

	<div class="nav">
		<h3><a href="/">Regresar</a></h3>
		<br>
	</div>
</body>
</html>