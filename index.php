<?php

session_start();
session_unset(); 
session_destroy();

?>


<?php include("included/header.php"); ?>
<?php include("included/navbar.php"); ?>

<?php include("usuarios.php"); ?>

<?php

 if (isset($_POST['submit'])) {
	
 	$nombre = $_POST['nombre'];
 	$apellido = $_POST['apellido'];
 	$usuario = $_POST['usuario'];
 	$contrasena = $_POST['contrasena'];

 	$u = new Usuarios();
 	$u->registrar($nombre, $apellido , $usuario , $contrasena);
 	

 	 // redirect("login.php");

}//Metodo Insertar


?>



<br>
<br>
<br>
<br>
<br>
<br>

	<div class="row col-md-4 col-md-offset-4">

		<form action="" method="post">
			
			<label>Nombre:</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
			
			<label>Apellido:</label>
			<input type="text" class="form-control" name="apellido" id="apellido">

			<label>Usuario:</label>
			<input type="text" class="form-control" name="usuario" id="usuario">

			<label>Contraseña:</label>
			<input type="password" class="form-control" name="contrasena" id="contrasena">

			<br>
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm"
			onclick="return validarRegistro()">Registrar</button>
			<button type="reset" class="btn-danger btn-sm">Cancelar</button>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>





<?php include("included/footer.php");?>




