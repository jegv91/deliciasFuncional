<?php 
$pageTitle="Informaci&oacute;n del usuario";
include_once("../views/header_index.php");
?>
	<div class="container-fluid">
      <div class="row-fluid">
		<h1>Informaci&oacute;n del usuario</h1>	
			<div style="display:table-cell;">
				<table class="table table-bordered">
				<tr><th>Email</th>
					<td><?php echo $usuario->email;?></td></tr>
				<tr><th>Nombre</th><td><?php echo $usuario->nombre;?></td></tr>
				<tr><th>Tipo</th><td><?php echo $usuario->tipo;?></td></tr>
				<tr><th>Fecha de registro</th><td><?php echo $usuario->fecha_registro;?></td></tr>
				</table>
			</div>
			<div style="display:table-cell;">
				<?php echo "<img src=../Imagenes/Usuario/".$usuario->foto.">";?>
			</div>	
			<a class='btn btn-primary' onclick="history.back()" ><i class='icon-arrow-left icon-white'></i> Regresar</a>
		</div>
		</div>
		<?php include_once("../views/footer.html");?>
</body>
</html>