<?php 
$pageTitle="Inicio";
include_once("../views/header_index.php");
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10 offset1">
			<div class="hero-unit">
				<h1>Hola, administrador!</h1>
				<p>Bienvenido a la pagina del administrador de Pasteleria Delicias.</p>
				<p>
					<a class="btn btn-primary btn-large">Conoce un poco mas &raquo;</a>
				</p>
			</div>
			<?php 
			if(!(empty($listaNoticias))){
				echo '<div class="row-fluid">';
				echo "<h1>Pasteles</h1>";
				foreach ($listaPasteles as $obj) {
					echo "<div class='span4'>";
					echo "<div class='thumbnail'>";
					echo "<h2>".$obj["nombre"]."</h2>";
					echo "<p>".$obj["descripcion"]."</p>";
					echo "<a class='btn btn-primary' href='../controllers/detalleNoticia.php?id=".$obj["id"]."'><i class='icon-edit icon-white'></i>Ver Informaci&oacute;n</a>";
					echo " &nbsp; &nbsp; <a class='btn btn-danger' href='../controllers/eliminarUsuario.php?id=".$obj["id"]."'><i class='icon-trash icon-white'></i>Eliminar </a>";
					echo "</div>";
					echo "</div>";
				}
				echo '</div>';
			}
			?>
			<!--/row-->
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<hr>

	<footer>
		<p>&copy; Company 2012</p>
	</footer>

</div>
<!--/.fluid-container-->

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
	src="../assets/js/jquery.js"></script>
<script
	src="../assets/js/bootstrap-transition.js"></script>
<script
	src="../assets/js/bootstrap-alert.js"></script>
<script
	src="../assets/js/bootstrap-modal.js"></script>
<script
	src="../assets/js/bootstrap-dropdown.js"></script>
<script
	src="../assets/js/bootstrap-scrollspy.js"></script>
<script
	src="../assets/js/bootstrap-tab.js"></script>
<script
	src="../assets/js/bootstrap-tooltip.js"></script>
<script
	src="../assets/js/bootstrap-popover.js"></script>
<script
	src="../assets/js/bootstrap-button.js"></script>
<script
	src="../assets/js/bootstrap-collapse.js"></script>
<script
	src="../assets/js/bootstrap-carousel.js"></script>
<script
	src="../assets/js/bootstrap-typeahead.js"></script>

</body>
</html>
