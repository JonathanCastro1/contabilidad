<?php

/**
* 
*/
class Session 
{
	public $usario;
	public $contrasena;

	
	function __construct()
	{
		$this->session_activa();
	}

	public function session_activa(){

		if (isset($_SESSION['usuario'])) {
			
			$this->usuario = $_SESSION['usuario'];
			$this->contrasena = $_SESSION['contrasena'];

			echo "true";

		}
	}
}

$sessiona = new Session();

?>