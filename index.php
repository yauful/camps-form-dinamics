<!DOCTYPE html>
<html>
<head>
	<title>Add Remove Multiple Input Fields Dynamically Using Jquery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Formulario dinámico</h1>
		
		<form action="form-post.php" method="post">
			<div class="input_fields_wrap">


				<h3>Datos contacto</h3>
				<div class="form-group" >
					<label for="">Email</label>
					<input name="email" type="email" value="" class="form-control" required="">
				</div>
				<div class="form-group" >
					<label for="">Nombre</label>
					<input name="nombre" type="text" value="" class="form-control" required="">
				</div>

				<div class="boxDatosFacturas">
					<h3>Datos factura 1</h3>

					<div class="form-group" >
						<label for="">Número factura</label>
						<input name="nFactura[]" type="text" value="" class="form-control" required="">
					</div>


					<div class="form-group">
						<label for="">Referencia</label>
						<input name="referencia[]" type="text" value="" class="form-control" required="">
					</div>


					<div class="form-group">
						<label for="">Descripción anomalia</label>
						<textarea class="form-control" name="descripcionAnomalia[]" required=""></textarea>
					</div>
				</div>


				<button style="background-color:green;" class="add_field_button btn btn-info active">Add More Address</button>
				<hr>


			</div>
			
			<input type="submit" name="submit" value="Enviar">

			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


		</form>

	</div>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script><script src="fields.js"></script>
</body>
</html>