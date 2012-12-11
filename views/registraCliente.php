<?php 
$pageTitle="Registrar cliente";
include_once("../views/header_index.php");?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10 offset1">
			<h1>Registrar Cliente</h1>
			<form class="form-horizontal" action="../controllers/registraCliente.php" method="POST" enctype="multipart/form-data">
				<div style="display:table-cell;">
				<div class="control-group">
					<label class="control-label" for="nombre">Nombre</label>
					<div class="controls"> <input type="text" id="nombre" name="nombre" placeholder="Nombre completo"></div>
				</div>
				<div class="control-group">
					<label class="control-label">Sexo</label>
					<div class="controls">
						<select name="sexo">
							<option id="masculino" value="masculino">Hombre</option>
							<option id="masculino" value="masculino">Mujer</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="fechaNacimiento">Fecha de nacimiento</label>
					<div class="controls">
						<input name="fechaNacimiento" type="text" class="span6" value="1990-11-17"
						id="fechaNacimiento"> <span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="email">Correo</label>
					<div class="controls"><input type="text" id="email" name="email"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Contrase&ntilde;a</label>
					<div class="controls"><input type="password" id="password" name="password"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="c_password">Confirmar Contrase&ntilde;a</label>
					<div class="controls"><input type="password" id="c_password" name="c_password"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="c_password">Tel&eacute;fono</label>
					<div class="controls"><input type="text" id="telefono" name="telefono"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="c_password">Celular</label>
					<div class="controls"><input type="text" id="celular" name="celular"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="c_password">Direcci&oacute;n</label>
					<div class="controls"><input type="text" id="direccion" name="direccion"></div>
				</div>
				</div>
				<div style="display:table-cell;">
				&nbsp;<input id="file" type="file" name="file" style="display:none" onchange="readURL(this);">
				<div class="input-append">
				   <input id="photo" class="input-large" type="text">
				   <a class="btn" onclick="$('input[id=file]').click();">Subir</a> 
				</div>
				<br/><br/>
				<img style="padding-left: 54px;" id="blah" src="../assets/img/up.png" alt="your image" />
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary">
							<i class="icon-user icon-white"></i> Reg&iacute;strarme
						</button>
						<button type="button"  onclick="history.back()" class="btn btn-danger">
							<i class="icon-remove icon-white"></i> Cancelar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once("footer.html");?>
</body>
</html>

<script type="text/javascript">
	$('input[id=file]').change(function() {
	   $('#photo').val($(this).val());
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
<script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		/* LLamadas a seleccionador de fechas de bootstrap*/
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
			$('#fechaNacimiento').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		});
	</script>
