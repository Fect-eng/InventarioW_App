<?php 

    session_start();
	require_once "../../clases/Conexion.php";       //agregado conexion
	 
    require_once "../../clases/Natural_Clientes.php";     //
	$obj= new clientesNaturales();


	$datos=array(
		$_POST['nombre'],    //nombre
		$_POST['apellidos'],
		$_POST['direccion'],
		$_POST['email'],
		$_POST['telefono'],
		$_POST['dni']            //tambien tendra la funcion de insertar RUC
			);

			echo $obj->agregaClienteNatural($datos);
			//var_dump ($datos);      //
/*
id_cliente_natural ,
nombre_natural,
apellido_natural,
direccion_natural,
email_natural,
telefono_natural,
dni_natural
*/




/*   para ver errores
try {
	
}
catch (Exception $e)
{
	var_dump ($e); 
}
*/


	
	
 ?>   