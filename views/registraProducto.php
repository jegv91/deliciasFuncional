<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrar Producto | Delicias</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
	<link href="../assets/css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/timepicker.css" rel="stylesheet" type="text/css" />
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.bootstrap-money-field.js"></script>
	
</head>
<body>
	<?php include_once("../views/header_index.php");?>
	<div class="container">
		<h1>Registrar Producto</h1>
		<form class="form-horizontal" action="../controllers/registraProducto.php" method="POST" enctype="multipart/form-data">
			<div style="display:table-cell;">
			<div class="control-group">
				<label class="control-label" for="nombre">Nombre</label>
				<div class="controls">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre del producto">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="precio">Precio</label>
				<div class="controls">
					<input type="text" id="precio" name="precio" class="money"/>					
				</div>
			</div>
			<div class="control-group">
					<label class="control-label">Tipo de Categor&iacute;a</label>
					<div class="controls">
						<select name="categoria">
							<?php			
								foreach ($lista as $obj) {
							?>
							<option id="<?php echo $obj['id'];?>" value="<?php echo $obj['id'];?>"><?php echo $obj['nombre'];?></option>
							<?php 
							}
							?>
						</select>
					</div>
			</div>
			</div>
			<div style="display:table-cell;">
				&nbsp;<input id="file" type="file" name="file" style="display:none" onchange="readURL(this);">
				<div class="input-append">
				   <input id="photo" class="input-large" type="text">
				   <a class="btn" onclick="$('input[id=file]').click();">Subir</a> 
				</div>
				<br/><br/>
				<img style="padding-left: 54px;" id="blah" src="../assets/img/upp.png" alt="your image" />
			</div>			
			<div class="control-group">
				<br/>
				<label class="control-label" for="descripcion">Descripci&oacute;n</label>
				<div class="controls">
					<textarea id="descripcion" name="descripcion" rows="6" cols="120" class="span6"
					placeholder="Lo que sea que nos permita conocer conocer un poco m&aacute;s sobre el contenido de tu evento "></textarea>
				</div>
			</div>
			<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary">
							<i class="icon-user icon-white"></i> Aceptar
						</button>
						<button type="button"  onclick="history.back()" class="btn btn-danger">
							<i class="icon-remove icon-white"></i> Cancelar
						</button>
					</div>
			</div>			
		</form>
	</div>
	<br />
	<br />
	<?php //include_once("../views/footer.html");?>
	
	<script type="text/javascript">
		$('input[id=file]').change(function() {
		   $('#photo').val($(this).val());
		}); 
	</script>
	
	<script type="text/javascript">    
	var options = {
		width: 80 // The css width to be applied to the textfield
	};
	$('.money').money_field(options); // Or just $('.money').money_field();
	</script>
	
	<script type="text/javascript">
        $(document).ready(function () { 
            $('.timepicker-2').timepicker({
                minuteStep: 30,
                showInputs: false,
                disableFocus: true
            });
        });
    </script>
	
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
			$('#fechaInicio1').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#fechaFin1').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		});
	</script>
	<script type="text/javascript">
		 function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah')
							.attr('src', e.target.result)
							.width(240)
							.height(154);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}

	</script>
</body>
</html>
