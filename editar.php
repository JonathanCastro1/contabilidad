<?php include("included/header.php"); ?>
<?php include("included/navbar.php"); ?>
<?php include("included/sidebar.php"); ?>


<?php include("usuarios.php"); ?>

<?php


if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$s = new Usuarios();

 $datos=$s->obtenerDatosID($id);

}//Obtenemos los datos por el id especifico enviado por get
//y lo guardo en la variable $id


  if (isset($_POST['submit'])) {
	
 	$fecha = $_POST['fecha'];
 	$descripcion = $_POST['descripcion'];
 	$ingreso = $_POST['ingreso'];
 	$egreso = $_POST['egreso'];
 	$id = $_POST['id'];

 	$u = new Usuarios();
 	$u->actualizar($fecha,$descripcion ,$ingreso ,$egreso, $id);
 	

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
			<input type="text" id="datepicker" name="fecha" class="form-control"
			value="<?php echo $datos[0]->fecha ?>">
			
			<label>Descripcion:</label>
			
			<textarea name="descripcion"  class="form-control"
			><?php echo $datos[0]->descripcion ?></textarea>
			

			<label>Ingreso:</label>
			<input type="text" class="form-control" name="ingreso"
			value="<?php echo $datos[0]->ingreso ?>">

			<label>Egreso:</label>
			<input type="text" class="form-control" name="egreso"
			value="<?php echo $datos[0]->egreso ?>">

			<br>
			<input type="hidden" name="id" value="<?php echo $datos[0]->id ?>" />
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm">Actualizar</button>
			<button type="reset" class="btn-danger btn-sm">Cancelar</button>

			<br>
			<br>	
			<a href="contentEditar.php"><span class="btn-default btn-sm te">Regresar</span></a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>




<?php include("included/footer.php");?>