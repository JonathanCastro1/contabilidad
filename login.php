
<?php

session_start();

?>

<?php include("included/header.php"); ?>
<?php include("included/navbar.php"); ?>
<?php include("usuarios.php"); ?>







<?php



if (isset($_POST['submit'])) {

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];


	$p = new Usuarios();
	$datos=$p->obtenerLogin($usuario,$contrasena); 


 if ($_SESSION['usuario']=$datos[0]->usuario & $_SESSION['contrasena']=$datos[0]->contrasena ) {//Valido  el usuario y la contraseña
	


	$_SESSION['usuario']=$datos[0]->usuario;
	$_SESSION['contrasena']=$datos[0]->contrasena;		

	redirect("dashboard.php");

 }else{


 	 redirect("login.php");

 	 // $mensaje="datos invalidos";


 }








 // redirect("dashboard.php");
	
}//Nota Los include deben ir de arriba de primeros para evitar errores




?>



<div class="row col-md-4 col-md-offset-4">

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<!-- 	<?php

	if (isset($mensaje)) {
	
	?>
		<p><?php echo $mensaje; ?></p>
	
<?php
	}

	?>
 -->


	<form action="" method="POST">
		<label>Usuario:</label>
		<input type="text" class="form-control" name="usuario">

		<label>Contraseña:</label>
		<input type="password" class="form-control" name="contrasena">
		
		<br>
		<br>
		<button type="submit" name="submit" value="submit" class="btn-success btn-sm">Ingresar</button>
		<button type="reset" class="btn-danger btn-sm">Cancelar</button>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</form>
	
</div>


<?php include("included/footer.php");?>