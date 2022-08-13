<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['usuario_user'];
	$a=$_POST['pass_user'];
	$e=$_POST['name_user'];
	$t=$_POST['correo_app'];

	$sql="INSERT into wtb_userapp (usuario_user,pass_user,name_user,correo_app)
								values ('$n','$a','$e','$t')";
	echo $result=mysqli_query($conexion,$sql);
 //usuario_user
    //pass_user
    //name_user
    //correo_app
    //fecha_creacion_app
    //id_userapp 
 ?>