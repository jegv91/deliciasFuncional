<?php 
$pageTitle="Productos";
include_once("../views/header_index.php");
?>
<div class="container-fluid">
	<div class="span11 offset0">	
	<?php			
	//pasteles cupcakes pays panaderia
		if(!(empty($listaPasteles))){
			echo '<div class="row-fluid">';
			echo "<h1>Pasteles</h1>";
			foreach ($listaPasteles as $obj) {
				echo "<div class='span4'>";
				echo "<div class='thumbnail'>";
				echo "<h2>".$obj["nombre"]."</h2>";
				echo '<img src="'.$obj["foto"].'" alt="'.$obj["descripcion"].'">';
				echo "<p>".$obj["descripcion"]."</p>";
				echo "<a class='btn btn-primary' href='../controllers/detalleUsuario.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Ver Informaci&oacute;n</a>";
				echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar </a>";
				echo "</div>";
				echo "</div>";
			}
			echo '</div>';
		}
		
		if(!(empty($listaCupcakes))){
			echo '<div class="row-fluid">';
			echo "<h1>Cupcakes</h1>";
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
			echo '<div class="row-fluid">';
			echo "<h1>Pays</h1>";
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
			echo '<div class="row-fluid">';
			echo "<h1>Panader&iacute;a</h1>";
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
