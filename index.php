<?php
include("conexion.php");
//se crea una nueva instancia
$datos = new basedatos();
//isset() para comprobar si una variable está definida -- !empty si no viene null
if (isset($_POST) && !empty($_POST)) {
	//se llama la función insertar y se le pasan los parámetros del formulario
	$res = $datos->insertar_reservas($_POST['nombre'], $_POST['celular'], $_POST['email'], $_POST['presupuesto'], $_POST['destino'], $_POST['observaciones'], $_POST['fecha'],);
	//si el resultado es true, quiere decir que insertó en la tabla de la base de datos
	if ($res) {
		//se configura el mensaje 
		echo '<script type="text/javascript">
            alert("Información enviada correctamente");
            window.location.href="listar.php";
            </script>';
	} else {
		echo '<script type="text/javascript">
            alert("Error: No se pudo enviar la información");
            </script>';
	}
} //fin IF    
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Krona+One|Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="icon" href="img/NASA_logo.svg.png" type="image/png" />

	<title>-Turismo del mundo-</title>
</head>
<body>
	<header class="bg-primary">
		<div class="menu-contenedor">
			<img src="img/NASA_logo.svg.png" width="67px" height="55px">
			<a href="#">Precios</a>
			<a href="#">Promociones</a>
			<a href="#">Tarjeta Gold</a>
			<a href="index.php">Cotizaciones</a>
		</div>
	</header>

	<section class="contenedor">
		<div class="contenedor-form ">
			<form method="post">
				<div class="form-group">
					<label for="nombre">Nombre Completo</label>
					<input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>
				<div class="form-group">
					<label for="celular">Número de celular</label>
					<input type="text" class="form-control" id="celular" name="celular" required>
				</div>
				<div class="form-group">
					<label for="email">Correo Electrónico</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="nombre@example.com" required>
				</div>
				<div class="form-group">
					<label for="presupuesto">Seleccione su presupuesto</label>
					<select class="form-control" id="presupuesto" name="presupuesto">
						<option>Menos de $1.000.000</option>
						<option>Entre $1.000.000 y $3.000.000</option>
						<option>Entre $3.000.000 y $5.000.000</option>
						<option>Mas de $5.000.000</option>
					</select>
				</div>
				<div class="form-group">
					<label for="destino">Escoja su destino favorito</label>
					<select class="form-control" id="destino" name="destino" required>
						<option>Africa</option>
						<option>Asia</option>
						<option>Europa</option>
						<option>Norte América</option>
						<option>Oceania</option>
					</select>
				</div>

				<div class="form-group">
					<label for="fecha">Fecha del viaje</label>
					<input type="date" class="form-control" id="fecha" name="fecha" required>
				</div>
				<div class="form-group">
					<!-- estos son los camposque agregare yo  -->
					<label for="fnacimiento">Fecha de nacimiento</label>
					<input type="date" class="form-control" id="fnacimiento" name="fnacimiento" required>
					
					<label for="cantidad" class="mt-3">Cantidad de Acompañantes</label>
					<input type="number" class="form-control" id="cantidad" name="cantidad" required>

										
					<label for="comida" class="mt-3">Comida favorita</label>
					<input type="text" class="form-control" id="comida" name="comida" required>
					
				</div>
				<div class="form-group">
					<label for="Observaciones">Observaciones:</label>
					<textarea class="form-control" id="observaciones" name="observaciones" rows="2"></textarea>
				</div>
				<center>
					<button type="submit" class="btn btn-info">Enviar</button>
					<a class="btn btn-warning w-25" href="listar.php">Listar</a>
				</center>
			</form>

		</div>
	</section>
</body>

</html>