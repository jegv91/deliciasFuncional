<?php 
$pageTitle="Listado de Usuarios";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Lista de usuarios</h1>
			<table class="table table-bordered">
			<tr><th colspan=3>Nombre</th></tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["nombre"]."</td>";				
				echo "<td><a class='btn btn-primary' href='../controllers/detalleUsuario.php?id=".$obj["email"]."'><i class='icon-user icon-white'></i>Ver Informaci&oacute;n</a></td>";
				echo "<td><a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["email"]."'><i class='icon-trash icon-white'></i>Eliminar </a></td></tr>";				
			}
			?>
			</table>
			<a class='btn' href='../controllers/registraUsuario.php'><i class='icon-user'></i>Registrar usuario</a>
		</div>
		</div>
		<?php include_once("footer.html");?>	
</body>
</html>