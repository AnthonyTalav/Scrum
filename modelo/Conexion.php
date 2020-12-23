<?php

define("SERVIDOR","localhost");
define("USUARIO","root"); 
define("CLAVE","");
define("BD","apushdb");

class Conexion{
	
	protected $conexion;
	
	public function __construct(){
		if(!isset($this->conexion)){ 
			$this->conexion = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BD);
			mysqli_select_db($this->conexion,BD) or die(mysql_error());
		}
	}
	
	public function getConexion(){
		return $this->conexion;
	}
	
	public function cerrarConexion(){
		return mysqli_close($this->conexion);
	}
}

?>