<?php include("included/header.php"); ?>
<?php include("included/navbar.php"); ?>
<?php require("included/sidebar.php"); ?>

<?php include("usuarios.php"); ?>

<?php

 if (isset($_POST['submit'])) {
	
 	$fecha = $_POST['fecha'];
 	$descripcion = $_POST['descripcion'];
 	$ingreso = $_POST['ingreso'];
 	$egreso = $_POST['egreso'];

 	$u = new Usuarios();
 	$u->registrarContabilidad($fecha,$descripcion ,$ingreso ,$egreso);
 	

 	 redirect("content.php");

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
			
			<label>Fecha:</label>
			<input type="text" id="datepicker" name="fecha" class="form-control">
			
			<label>Descripcion:</label>
			
			<textarea name="descripcion"  class="form-control"></textarea>
			

			<label>Ingreso:</label>
			<input type="text" class="form-control" name="ingreso">

			<label>Egreso:</label>
			<input type="text" class="form-control" name="egreso">

			<br>
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm">Registrar</button>
			<button type="reset" class="btn-danger btn-sm">Cancelar</button>
			<br>
			<br>
			<a href="content.php"><span class="btn-default btn-sm te">Regresar</span></a>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>






<?php include("included/footer.php");?>




