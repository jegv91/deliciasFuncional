<?php 
$pageTitle="Listado de Categorias";
include_once("../views/header_index.php");?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Lista de categorias</h1>
			<table class="table table-bordered">
			<tr>
			<th >Nombre</th>
			<th >Descripci&oacute;n</th>
			<th >Tipo</th>
			</tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["id"]."</td>";
				echo "<td>".$obj["fecha"]."</td>";
				echo "<td>".$obj["estatus"]."</td>";	
				echo "<td><a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Cancelar </a></td></tr>";				
			}
			?>
			</table> 
			<a class='btn' href='../controllers/smartCart.php'><i class='icon-user'></i>Nueva orden</a>
		</div>
		</div>
		<?php include_once("footer.html");?>	
</body>
</html>