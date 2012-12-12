<?php 
$pageTitle="Productos";
include_once("../views/header_index.php");
?>
<div class="container-fluid">
	<div class="span11 offset0">	
	<?php			
	//pasteles cupcakes pays panaderia
		if(empty($listaPasteles) AND empty($listaCupcakes) AND empty($listaPays) AND empty($listaPanes)){
			echo '<div >';
			echo "<h1>No se han agregado productos</h1>";
			echo '</div>';
		}
		if(!(empty($listaPasteles))){
			echo "<h1>Pasteles</h1>";
			echo '<div class="row-fluid">';
			foreach ($listaPasteles as $obj) {
				echo "<div class='span4'>";
				echo "<div class='thumbnail'>";
				echo "<h2>".$obj["nombre"]."</h2>";
				echo '<img src="'.$obj["foto"].'" alt="'.$obj["descripcion"].'">';
				echo "<p>".$obj["descripcion"]."</p>";
				echo "<a class='btn btn-info' href='../controllers/editarProducto.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Editar</a>";
				echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/elimina.php?id=".$obj["id"]."&class=producto'><i class='icon-trash icon-white'></i>Eliminar </a>";
				echo "</div>";
				echo "</div>";
			}
			echo '</div>';
		}
		
		if(!(empty($listaCupcakes))){
			echo "<h1>Cupcakes</h1>";
			echo '<div class="row-fluid">';
			foreach ($listaCupcakes as $obj) {
				echo "<div class='span4'>";
				echo "<div class='thumbnail'>";
				echo "<h2>".$obj["nombre"]."</h2>";
				echo '<img height="300" width="300" src="'.$obj["foto"].'" alt="'.$obj["descripcion"].'">';
				echo "<p>".$obj["descripcion"]."</p>";
				echo "<a class='btn btn-primary' href='../controllers/detalleUsuario.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Ver Informaci&oacute;n</a>";
				echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar </a>";
				echo "</div>";
				echo "</div>";
			}
			echo '</div>';
		}
		if(!(empty($listaPays))){
			echo "<h1>Pays</h1>";
			echo '<div class="row-fluid">';
			foreach ($listaPays as $obj) {
				echo "<div class='span4'>";
				echo "<div class='thumbnail'>";
				echo "<h2>".$obj["nombre"]."</h2>";
				echo '<img height="300" width="300" src="'.$obj["foto"].'" alt="'.$obj["descripcion"].'">';
				echo "<p>".$obj["descripcion"]."</p>";
				echo "<a class='btn btn-primary' href='../controllers/detalleUsuario.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Ver Informaci&oacute;n</a>";
				echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar </a>";
				echo "</div>";
				echo "</div>";
			}
			echo '</div>';
		}
		if(!(empty($listaPanes))){		
			echo "<h1>Panader&iacute;a</h1>";
			echo '<div class="row-fluid">';
			foreach ($listaPanes as $obj) {
				echo "<div class='span4'>";
				echo "<div class='thumbnail'>";
				echo "<h2>".$obj["nombre"]."</h2>";
				echo '<img height="300" width="300" src="'.$obj["foto"].'" alt="'.$obj["descripcion"].'">';
				echo "<p>".$obj["descripcion"]."</p>";
				echo "<a class='btn btn-primary' href='../controllers/detalleUsuario.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Ver Informaci&oacute;n</a>";
				echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar </a>";
				echo "</div>";
				echo "</div>";
			}
			echo '</div>';
		}	
	?>	
	</div>
</div>
<?php include_once("../views/footer.html");?>
</body>
</html>
