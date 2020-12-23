<?php 
	require_once "../modelo/CrudUsuario.php";


	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$ap=$_POST['apellidopaterno'];
	$am=$_POST['apellidomaterno'];
	$u=$_POST['usuario'];
	$p=$_POST['password']; 
	$e=$_POST['estado']; 

	
	$obj= new Usuario();
	$datos=$obj->actualizaUsuario($id,$n,$ap,$am,$u,$p,$e);

	echo $datos;

?>