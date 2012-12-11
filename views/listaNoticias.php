<?php 
$tipo = $_SESSION['user_type'];
$pageTitle="Noticias";
include_once("../views/header_index.php");
?>
<div class="container-fluid">
	<div class="row-fluid">
	<div class="span6 offset3">
		<h1>Noticias publicadas</h1>
		<table class="table table-bordered">
			<tr>
				<th colspan=3>Noticia</th>
			</tr>
			<?php			
			foreach ($lista as $obj) {
				echo "<tr><td>".$obj["nombre"]."</td>";
				if($tipo==0){
					echo "<td><a class='btn btn-primary' href='../controllers/enviarNoticia.php?id=".$obj["id"]."'><i class='icon-envelope icon-white'></i> Enviar por e-mail</a></td>";
					echo "<td><a class='btn btn-danger' href='../controllers/eliminarNoticia.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar noticia</a></td></tr>";
				} else {
					echo "<td><a class='btn btn-primary' href='../views/infoNoticia.php?id=".$obj["_id"]."'><i class='icon-envelope icon-white'></i> Ver detalles</a></td>";
				}
			}
			?>
		</table>
		<?php if($tipo==0){?>
		<a class='btn' href='../controllers/registraNoticia.php'><i class='icon-envelope'></i>Registrar noticia</a>
		<?php }?>
	</div>
</div>
</div>
<?php include_once("../views/footer.html");?>
</body>
</html>
