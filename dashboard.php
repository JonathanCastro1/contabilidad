
<?php

session_start();

?>
<?php include("included/header.php"); ?>
<?php include("included/navbar_usuario.php"); ?>
<?php include("included/sidebar.php"); ?>
<?php include("usuarios.php"); ?>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row col-md-4 col-md-offset-4 ">

	<p><?php echo "Bienvenido Usuario:".$_SESSION['usuario'] ?></p>
	<p><?php echo "Tu password es:".$_SESSION['contrasena'] ?></p>
	

</div>


<div class="row col-md-4 col-md-offset-4 ">
	
	<div id="grafico"></div>

</div>




<br>
<br>
<br>
<br>
<br>

<?php include("included/footer.php");?>


