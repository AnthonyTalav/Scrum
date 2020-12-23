<?php 
	require_once "../modelo/CrudUsuario.php";
	
	
	$u=$_POST['usuario'];
	$p=$_POST['password'];
	$n=$_POST['nombre'];
	$ap=$_POST['apellidopaterno'];
	$am=$_POST['apellidomaterno'];
	
	$obj= new Usuario(); 
	$datos=$obj->agregarUsuario($u,$p,$n,$ap,$am);

	echo $datos;

?>