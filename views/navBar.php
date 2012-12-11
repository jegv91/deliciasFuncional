    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
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
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 1) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Cupcakes</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 2) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Pays</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 3) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Panader&iacute;a</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 3) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li><a class="nav-button" href="../views/nosotros.php#history">Historia</a></li>
					  <li><a class="nav-button" href="../views/nosotros.php#contact">Contacto</a></li>
					  <li><a class="nav-button" href="../views/nosotros.php#map">Mapa</a></li>
					  <li><a class="nav-button" href="../views/nosotros.php#directory">Directorio</a></li>
				</ul>
			  </li>
			  <li ><a class="nav-button" href="../controllers/registraCliente.php" >¡Reg&iacute;strate!</a></li>
            </ul>
			<form class="navbar-form pull-right" method="POST" action="../controllers/validaUsuario.php">
			  <input class="span2" type="text" id="user" name="user" placeholder="Correo">
			  <input class="span2" type="password" id="password" name="password" placeholder="Contrase&ntilde;a">
			  <button type="submit" class="btn">Entrar</button>
            </form>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->