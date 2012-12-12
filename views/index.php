<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inicio &middot; Delicias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../assets/css/smart_cart.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

	html { overflow-y:hidden; }
	
    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */
    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }
    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */
    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: relative;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }
    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }
    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }
    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }
    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */
    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }
    .carousel .container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
    }
    .carousel-control {
      background-color: transparent;
      border: 0;
      font-size: 120px;
      margin-top: 0;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel .item {
      height: 500px;
    }
    .carousel img {
      min-width: 100%;
      height: 500px;
    }
    .carousel-caption {
      background-color: rgba(193,93,99,.7);;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-bottom: 100px;
	  border-radius:7px;
	  -moz-border-radius: 7px; 
	  -webkit-border-radius : 7px;	  
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }
    /* MARKETING CONTENT
    -------------------------------------------------- */
    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }
    /* Featurettes
    ------------------------- */
    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }
    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }
    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }
    /* RESPONSIVE CSS
    -------------------------------------------------- */
    @media (max-width: 979px) {
      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }
      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }
      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }
    @media (max-width: 767px) {
      .navbar-inner {
        margin: -20px;
      }
      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {
      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-bottom: 40px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }
      .marketing .span4 + .span4 {
        margin-top: 40px;
      }
      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }
    }
    </style>
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <?php include_once ("../views/navBar.php");?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" style="padding-top:120px;">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/cakes/04.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Simplemente lo mejor</h1>
              <p class="lead">Nuestros pasteles, horneados con el amor y calidad que hacen que tu paladar se sienta en en cielo...</p>
            </div>
          </div>
        </div>
		<?php for ($i = 1; $i <= 10; $i++) {
			echo '<div class="item">';
			if ($i < 10){
				echo  '<img src="../assets/img/cakes/0'.$i.'.jpg" alt="">';
			}else{
				echo  '<img src="../assets/img/cakes/'.$i.'.jpg" alt="">';
			}
				echo '<div class="container">
					<div class="carousel-caption">
					  <h1>Revisa nuestros productos</h1>
					  <p class="lead">Nuestros pasteles, horneados con el amor y calidad que hacen que tu paladar se sienta en en cielo...</p>
					</div>
				  </div>
				</div>';
		}
		?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <?php 
			if(!(empty($listaNoticias))){
				echo "<h1>Noticias</h1>";
				echo '<div class="row-fluid">';
				foreach ($listaNoticias as $obj) {
					echo "<div class='span4'>";
					echo "<h2>".$obj["nombre"]."</h2>";
					echo "<p>".$obj["descripcion"]."</p>";
					echo "</div>";
				}
				echo '</div>';
			}
			?>
	  </div>
    <!-- Historia
    ================================================== -->
    <hr class="featurette-divider">
	<div id="history">
      <div class="hero-unit">
        <img src="../assets/img/logo2.png" alt="" align="right">
        <h1>Nuestra historia</h1>
        <p class="lead">Delicias nace 30 años atras, en la cocina de Julieta Hern&aacute;ndez (Julietita), quien siendo secretaria biling&uuml;e decidi&oacute; tomar cursos de reposter&iacute;a
        para as&iacute; deleitar el paladar de su familia, creando pasteles y postres de un sabor inigualable.</p>
        <p class="lead">Con el paso del tiempo, sus postres fueron aceptados por m&aacute;s personas quienes se convirtieron en clientes permanentes de Julietita, para asi dar inicio a 
        Delicias, la empresa que hoy en d&iacute;a le ofrece nuestra tradici&oacute;n de ayer, sabor de hoy y calidad de siempre.</p>
        <p class="lead">Nuestro compromiso con usted es ofrecerle lo mejor de la reposter&iacute;a fina para aquellos momentos importantes que perdurar&aacute;n POR SIEMPRE.</p>
        <p class="lead">Cumplea&ntilde;os, cenas, aniversarios, reuniones o tan solo por el gusto de compartir, pasteler&iacute;a Delicias siempre estar&aacute; con usted para hacer de
        su reuni&oacute;n un evento memorable.</p>
        <p class="lead">Desde nuestra tienda y ahora en internet si&eacute;ntase como en su casa con sus amigos de Delicias, donde le ofrecemos trato personalizado y con la amabilidad que
        nos caracteriza.</p>
		<img src="../assets/img/pasteles.png" alt="" align="left">
        <h1>Misi&oacute;n</h1>
        </br>
        <p class="lead">Generar uni&oacute;n y felicidad en las familias, elaborando pasteles y postres de alta calidad, conservando siempre el sabor tradicional que satisface a nuestros clientes,
        buscando al mismo tiempo ser una empresa eficiente que genere beneficios a sus integrantes, accionistas y a la sociedad.</p>
		<img src="../assets/img/postres.png" alt="" align="right">
        <h1>Visi&oacute;n</h1>
        <p class="lead">Ser una empresa l&iacute;der en reposter&iacute;a reconocida a nivel nacional por la calidad en la elaboracion de sus productos, sabor inconfundible y excelente servicio.</p>     
	  </div>     
    </div>
<!-- Contacto
    ================================================== -->
	<hr class="featurette-divider">
	<div id="contact">
      <div class="hero-unit-3" align="center">
	  <h1>Contacto</h1>
      <form method="post" action="../controllers/contacto.php">
        <h2>Queremos saber tu opini&oacute;n</h2>
        <p class="lead">D&eacute;janos tu comentario!!</p>
        </br>
		<div style="display:table-cell; padding:10px; text-align:left;">
        <p class="lead">Nombre: <br/>
        <input type="text" id="nombre" class="text-input" name="nombre" placeholder="Escribe tu nombre"></p>	
		<p class="lead">Correo:<br/>
		<input type="text" id="correo" class="text-input" name="correo" placeholder="Escribe tu direccion de Email"/></p>
		</div>
		<div style="display:table-cell; padding:10px; text-align:left;">
        <p class="lead">Mensaje:<br/>
        <textarea type="textarea" rows="10" class="span4" id="mensaje"  name="mensaje" placeholder="Escribe tu comentario"/></textarea></p>
		</div>
		<button type="submit" class="btn">Enviar comentario</button>
	  </form>
      </div>
  </div>    
<!-- Mapa
    ================================================== -->
    <hr class="featurette-divider">
	<div id="map"> 
      <div class="hero-unit-4">
      <h1><center>Mapa del sitio</center></h1></br>
 	  </div>
    </div>
<!-- Directorio
    ================================================== -->
    <hr class="featurette-divider">
	<div  id="directory">
      <div class="hero-unit-2" align="center">
        <h1 align="center">Colaboradoras</h1>
        <p class="lead">*Guzm&aacute;n F&eacute;lix Claudia Cristina</p>
        <p class="lead">*Leyva Mill&aacute;n Karen Maricela</p>
        <p class="lead">*Meza Hern&aacute;ndez Elidia</p>
        <p class="lead">*Ochoa Regalado Maira Gabriela</p>
      </div>
    </div>
	<!-- /.container -->

<!-- Compras
	=============================================== -->
	<?php 
	if(isset($_SESSION['user_type'])){
		if($_SESSION['user_type'] == 3){?>
		<hr class="featurette-divider">
		<div  id="smartCart">
		<table align="center" border="0" cellpadding="0" cellspacing="0">
		<tr><td>  
		<form action="../controllers/smartCart.php" method="POST">
		<!-- Smart Cart HTML Starts -->
		  <div id="SmartCart" class="scMain">
			<?php 
			if(!(empty($listaProductos))){
				foreach($listaProductos as $obj){
					echo '<input type="hidden" pimage="'.$obj['foto'].'" pprice="'.$obj['precio'].'" pdesc="'.$obj['descripcion'].'" pcategory="'.$obj['categoria'].'" pname="'.$obj['nombre'].'" pid="'.$obj['id'].'">';
				}
			}
			?>                       
		  </div>
		<!-- Smart Cart HTML Ends -->
		</form>
		</td></tr>
		</table>
		
		</div>
		<?php 
		}
	}?>
	
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Cristina Guzm&aacute;n. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    <!--javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
	
	<script type="text/javascript" src="../assets/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.smartCart-2.0.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			// Call Smart Cart    	
			$('#SmartCart').smartCart();
			});
	</script>
	
  </body>
</html>