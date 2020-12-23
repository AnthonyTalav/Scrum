 <?php 
	require_once "Conexion.php";
	class Usuario{

		public function mostrarUsuario(){

			$c = new Conexion();
            $conexion = $c->getConexion();
			$sql = "SELECT * FROM usuarios";
			return $result=mysqli_query($conexion,$sql);

		}

		public function actualizaUsuario($id,$n,$ap,$am,$u,$p,$e){

			$c = new Conexion();
            $conexion = $c->getConexion();
            if(($n!="")&&($ap!="")&&($am!="")&&($u!="")&&($p!="")&&($e=="1"||$e=="0")){


			$sql="UPDATE usuarios set usuario='$u',
							pass='$p',
							nombre='$n',
							apepat='$ap',
							apemat='$am',
							estado='$e'
						where idusuario='$id'";
			}			
			return $result=mysqli_query($conexion,$sql);

		}public function agregarUsuario($u,$p,$n,$ap,$am){
			$c = new Conexion();
            $conexion = $c->getConexion();

			$sql="INSERT into usuarios (usuario,pass,nombre,apepat,apemat,estado) 
						values ('$u','$p','$n','$ap','$am','1')";

			return $result=mysqli_query($conexion,$sql);
		}
		public function eliminarUsuario($id){
			$c = new Conexion();
            $conexion = $c->getConexion();
			$sql="DELETE from usuarios where idusuario='$id'";
			
			return $result=mysqli_query($conexion,$sql);
		}
		public function BuscarNomPorId($id){
			$c = new Conexion();
            $conexion = $c->getConexion();
			$sql= "SELECT *FROM usuarios where idusuario='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
		
	}
 ?>