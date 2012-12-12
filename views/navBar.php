<div class="container navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" id="header">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Las Delicias</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a class="nav-button" href="#">Inicio</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li class="nav-header">Pasteles</li>
					<?php
					if(!(empty($lista)))
						foreach ($lista as $obj) {
						if ($obj["tipo"] == 1) 
							echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
						}
					?>
					<li class="nav-header">Cupcakes</li>
					<?php
					if(!(empty($lista)))
						foreach ($lista as $obj) {
						if ($obj["tipo"] == 2) 
							echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
						}
					?>
					<li class="nav-header">Pays</li>
					<?php
					if(!(empty($lista)))
						foreach ($lista as $obj) {
						if ($obj["tipo"] == 3) 
							echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
						}
					?>
					<li class="nav-header">Panader&iacute;a</li>
					<?php
					if(!(empty($lista)))
						foreach ($lista as $obj) {
						if ($obj["tipo"] == 4) 
							echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
						}
					?>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li><a class="nav-button" href="#history">Historia</a></li>
					  <li><a class="nav-button" href="#contact">Contacto</a></li>
					  <li><a class="nav-button" href="#map">Mapa</a></li>
					  <li><a class="nav-button" href="#directory">Directorio</a></li>

				</ul>
           <li class="active"><a class="nav-button" href="#"><?php
                include("../models/contador.php");
                echo $num_visitas;
				if($num_visitas > 1)
					echo " visitas";
				else
					echo " visita";
            ?></a></li>

			  </li>
				<?php if (!(isset($_SESSION['user_type']))){
						echo '<li ><a class="nav-button" href="../controllers/registraCliente.php" >¡Reg&iacute;strate!</a></li>';
			    } elseif ($_SESSION['user_type'] == 3) {
						echo '<li ><a class="nav-button" href="#smartCart" >¡Compra YA!</a></li>';
				}?>
			</ul>
			<?php if (isset($_SESSION['user_type'])){ ?>
				<p class="navbar-text pull-right">
				<a href="#" class="navbar-link"><?php echo $_SESSION['user_id'];?></a>
				<a href="../controllers/cerrarSesion.php"><i class="icon-off icon-white"></i> </a>
			<?php } else { ?>
				<form class="navbar-form pull-right" method="POST" action="../controllers/validaUsuario.php">
					<input class="span2" type="text" id="user" name="user" placeholder="Correo">
					<input class="span2" type="password" id="password" name="password" placeholder="Contrase&ntilde;a">
					<button type="submit" class="btn">Entrar</button>
				</form>
			<?php }?>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->