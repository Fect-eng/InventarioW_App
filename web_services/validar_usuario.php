<?php
session_start();
include 'conexionApp.php';
$conexion=conexion();

$usu_usuario=$_POST['usuario'];
$usu_password=$_POST['password'];

//$usu_usuario="jkjkjk";
//$usu_password="jkjkj";

//$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE usu_usuario=? AND usu_password=?");
//Base datos
$sentencia=$conexion->prepare("SELECT * FROM t_persona WHERE nombre=? AND apellido=?");  //cambiar
$sentencia->bind_param('ss',$usu_usuario,$usu_password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
//esta parte funciona con Android con WebService 
//Validar usuarios ingresados

//nofunciona en localhost 
?>