<?php 

	require_once "../modelo/CrudAlumno.php";


	$id=$_POST['id'];
	$c = new Conexion();
	$obj= new Usuario();
	$datos=$obj->eliminarUsuario($id);

	echo $datos;


 ?>