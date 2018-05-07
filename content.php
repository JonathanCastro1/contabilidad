<?php



?>



<?php require("included/header.php");  ?>
<?php require("included/navbar_usuario.php");  ?>
<?php require("included/sidebar.php");  ?>
<?php require("usuarios.php");  ?>

<?php

$s = new Usuarios();
$datos=$s->selecionarDos();

//Metodo Selecionar Dos


// if (isset($_GET['id'])) {
	
// 	$id = $_GET['id'];

// 	$d = new Usuarios();
// 	$d->eliminar($id);




// }//Metodo para Eliminar


$suma = new Usuarios();






?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<br>
<br>
<br>
<br>
<br>


	<div class="row col-md-4 col-md-offset-4">

		<div class="page-header">
  			<h1>Datos Contables <small>Registro Mensual</small></h1>
		</div>

<table id="tabla" class="display">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >FECHA</th>
                            <th >DESCRIPCION</th>
                            <th >INGRESO</th>
                            <th >EGRESO</th>
                            
                        </tr>
                    </thead>

 <tbody>
	<?php

foreach ($datos as $dato) {

	?>
<tr>
<td><?php echo $dato->id ?> </td>
<td><?php echo $dato->fecha ?> </td>
<td><?php echo $dato->descripcion ?> </td>
<td><?php echo $dato->ingreso ?> </td>
<td><?php echo $dato->egreso ?> </td>

</tr>


<!-- <tr>
	
<td>
 <a   href="editar.php?id=<?php echo $dato->id ?>"><span class="btn-info btn-sm">Editar</span></a>
</td>

<td>
 <a id="eliminar"  href="content.php?id=<?php echo $dato->id ?>" ><span class="btn-danger btn-sm">Eliminar</span></a>
</td>
</tr> -->


<?php

}


?>


<tfoot >	
	<td colspan="3" class="text-primary">Total para la fecha:<?php echo date("m-d-y"); ?></td>	
	<td colspan="1"><?php $suma->totalIngresos(); ?></td>
	<td colspan="1"><?php $suma->totalEgresos(); ?></td>
</tfoot>


</tbody>



</table>

<br>
<a href="agregar.php"><span class="btn-success btn-sm">Agregar</span></a>

<a href="contentEditar.php"><span class="btn-primary btn-sm">Editar</span></a>

<a href="reporte.php"><span class="btn-danger btn-danger btn-sm">Version PDF</span></a>
<!-- paginacion -->
<!-- <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> -->




<br>
<br>

</div>
	
<?php include("included/footer.php");?>