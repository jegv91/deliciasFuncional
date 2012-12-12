<?php 
$pageTitle="Registrar Noticia";
include_once("../views/header_index.php");
?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Editar noticia</h1>
		<form class="form-horizontal" action="../controllers/editarNoticia.php?id=<?php echo $noticia->id;?>" method="POST">
			<div class="control-group">
				<label class="control-label" for="nombre">T&iacute;tulo</label>
				<div class="controls">
					<input type="text" id="nombre" name="nombre" placeholder="T&iacute;tulo de la noticia" value="<?php echo $noticia->nombre;?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="descripcion">Descripci&oacute;n</label>
				<div class="controls">
					<textarea id="descripcion" name="descripcion" rows="6"
					><?php echo $noticia->descripcion;?></textarea>
				</div>
			</div>
			<div class="control-group" >
					<label class="control-label" for="fechaFin1">Fecha de expiro</label>
					<div class="controls">
						<input name="fechaFin1" type="text" class="span2"
							value="2012-11-17"
							id="fechaFin1"><span class="help-inline"></span>
					</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><i class="icon-comment icon-white"></i> Editar noticia</button>
					<button type="button"  onclick="history.back()" class="btn btn-danger">
						<i class="icon-remove icon-white"></i> Cancelar
					</button>
				</div>
			</div>
		</form>
	</div>
	</div>
	<?php include_once("../views/footer.html");?>
	<script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		/*
		 * LLamadas a seleccionador de fechas de bootstrap
		 */
		var currentTime = new Date();
		var month = currentTime.getMonth() + 1;
		var day = currentTime.getDate();
		var year = currentTime.getFullYear();
		
		function setToday(id){
			document.getElementById(id).value=year+"-"+month+"-"+day;
		}
		$(document).ready(function () {
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#fechaFin1').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		});
	</script>
</body>
</html>
