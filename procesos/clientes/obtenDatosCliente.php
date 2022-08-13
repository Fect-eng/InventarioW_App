<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Clientes.php";     //tabla asignada

	$obj= new clientes();

	echo json_encode($obj->obtenDatosCliente($_POST['idcliente']));

 ?>