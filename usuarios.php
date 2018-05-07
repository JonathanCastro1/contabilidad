<?php

require("included/conexion.php");


class Usuarios extends Conexion
{

	public $db;
	
	function __construct()
	{
		$this->db=parent::db_conexion();
	}


		// public function selecionar(){


		//       $sql = "SELECT id,nombre,apellido,usuario,contrasena from usuarios";

		// 	$resultado=$this->db->query($sql);


		// 	// if ($resultado->num_rows > 0) {			

		// 	while ($fila=$resultado->fetch_array()) {
				
		// 		echo "Id:".$fila['id']."<br>"."Nombre:".$fila['nombre']."<br>"."Apellido:".$fila['apellido']."<br>".
		// 		"Usuario:".$fila['usuario']."<br>"."Contraseña:".$fila['contrasena']."<br>";
		// 	}

		// // }

	


  // }





  	public function selecionarDos(){


		      $sql = "SELECT id,fecha,descripcion,ingreso,egreso from contabilidad";

			$resultado=$this->db->query($sql);
			$arreglo=array();


			// if ($resultado->num_rows > 0) {			

			while ($fila=$resultado->fetch_object()) {
				
				// return $fila['id'].$fila['nombre'].$fila['apellido'].$fila['usuario'].$fila['contrasena'];
				// return $fila['id','nombre'];
				$arreglo[]=$fila;

				
			}
			return $arreglo;
		// }

	


  }



		public function registrar($nombre, $apellido , $usuario , $contrasena){


		      $sql = "INSERT INTO usuarios VALUES
		       (null,
		        '$nombre',
		         '$apellido',
		         '$usuario',
		          '$contrasena' )";

			$this->db->query($sql);

	


  }


		public function registrarContabilidad($fecha,$descripcion ,$ingreso ,$egreso){


		      $sql = "INSERT INTO contabilidad VALUES
		       (null,
		        '$fecha',
		         '$descripcion',
		         '$ingreso',
		          '$egreso' )";

			$this->db->query($sql);

	


  }


 	// 	public function eliminar($nombre){


		//       $sql = "DELETE from usuarios where nombre='$nombre'";

		// 	$this->db->query($sql);

	


  // }


   		public function eliminar($id){


		      $sql = "DELETE from contabilidad where id='$id'";

			$this->db->query($sql);

	


  }

		public function actualizar($fecha,$descripcion ,$ingreso ,$egreso ,$id ){


		      $sql = "UPDATE contabilidad SET fecha = '$fecha',
				descripcion = '$descripcion',
				ingreso = $ingreso,
				egreso = $egreso
		       WHERE id = $id";

			$this->db->query($sql);

	


  }

  	public function obtenerDatosID($id){


		      $sql = "SELECT id,fecha,descripcion,ingreso,egreso from contabilidad
 				where id = $id ";

			$resultado=$this->db->query($sql);
			$arreglo=array();


			// if ($resultado->num_rows > 0) {			

			while ($fila=$resultado->fetch_object()) {
				
				// return $fila['id'].$fila['nombre'].$fila['apellido'].$fila['usuario'].$fila['contrasena'];
				// return $fila['id','nombre'];
				$arreglo[]=$fila;

				
			}
			return $arreglo;
		// }


  }


  public function obtenerLogin($usuario, $contrasena){


		      $sql = "SELECT id,nombre,apellido,usuario,
		      contrasena from usuarios where usuario='$usuario'
				and contrasena='$contrasena' ";

			$resultado=$this->db->query($sql);
			$arreglo=array();


			// if ($resultado->num_rows > 0) {			

			while ($fila=$resultado->fetch_object()) {
				
				// return $fila['id'].$fila['nombre'].$fila['apellido'].$fila['usuario'].$fila['contrasena'];
				// return $fila['id','nombre'];
				$arreglo[]=$fila;

				
			}
			return $arreglo;
		// }

	


  }


    public function totalIngresos(){


		      $sql = "SELECT SUM(ingreso) FROM contabilidad WHERE egreso < 10000000 ";

			$resultado=$this->db->query($sql);
			$conversionArray=mysqli_fetch_array($resultado);
			printf($conversionArray[0]);	

	


  }


    public function totalEgresos(){


		      $sql = "SELECT SUM(egreso) FROM contabilidad WHERE egreso < 10000000 ";

			$resultado=$this->db->query($sql);
			$conversionArray=mysqli_fetch_array($resultado);
			printf($conversionArray[0]);	

	


  }







}



?>