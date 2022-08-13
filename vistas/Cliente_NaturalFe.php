<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Cliente Natural </title>
		<?php require_once "menu.php"; ?>
		<link rel="stylesheet" type="text/css" href="../css/clienteNatural.css">
	</head>
	<body>


		<div class="container">
			<h1>Prueba en desarrollo</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmClientesNaturales">      <!-- Modificado --><!-- Modificado -->
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellidos" name="apellidos">
						<label>Direccion</label>
						<input type="text" class="form-control input-sm" id="direccion" name="direccion">
						<label>Email</label>
						<input type="text" class="form-control input-sm" id="email" name="email">
						<label>Telefono</label>
						<input type="text" class="form-control input-sm" id="telefono" name="telefono">
						<label>DNI / RUC</label>
						<input type="text" class="form-control input-sm" id="dni" name="dni">
						<p></p>
						<span class="btn btn-primary" id="btnAgregarClienteNatural">Agregar</span> <!-- Modificado -->
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tablaClientesNaturalLoad"></div>   <!-- Modificado -->
				</div>

			</div>
		</div>

		<!-- Button trigger modal -->






		<!-- Modal Actualizar -->
		<div class="modal fade" id="abremodalClientesUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualizar Cliente Natural</h4>
					</div>
					<div class="modal-body">
						<form id="frmClientesU">
							<input type="text" hidden="" id="idclienteU" name="idclienteU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" id="apellidosU" name="apellidosU">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" id="direccionU" name="direccionU">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="emailU" name="emailU">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
							<label>RUC</label>
							<input type="text" class="form-control input-sm" id="rfcU" name="rfcU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAgregarClienteU" type="button" class="btn btn-primary" data-dismiss="modal">Actualizar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>



	<?php 
}else{
	header("location:../index.php");
}
?>