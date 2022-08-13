<?php 

	require_once "../../clases/Conexion.php";       //coincide a la conexion
	require_once "../../clases/Natural_Clientes.php";      //tabla asignada

	$obj= new clientes();

	echo json_encode($obj->obtenDatosCliente($_POST['idcliente']));

 ?>