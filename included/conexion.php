<?php


class Conexion 
{
	public $conexion;	
	
	

	public function db_conexion(){



		$this->conexion = new mysqli('localhost','root','','db_contabilidad');
		 
		 return $this->conexion;

		
}



}





?>