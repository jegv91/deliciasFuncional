<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Smart Cart 2 - a javascript jQuery shopping cart plugin" />
<title>Smart Cart </title>

<!-- Smart Cart Files Include -->
<link href="../assets/css/smart_cart.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.smartCart-2.0.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
    	// Call Smart Cart    	
  		$('#SmartCart').smartCart();
		});
</script>
</head>
<body>

<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>  
<form action="../controllers/smartCart.php" method="POST">
<!-- Smart Cart HTML Starts -->
  <div id="SmartCart" class="scMain">
	<?php foreach($lista as $obj){
		echo '<input type="hidden" pimage="'.$obj['foto'].'" pprice="'.$obj['precio'].'" pdesc="'.$obj['descripcion'].'" pcategory="'.$obj['categoria'].'" pname="'.$obj['nombre'].'" pid="'.$obj['id'].'">';
	}
	?>                       
  </div>
<!-- Smart Cart HTML Ends -->
</form>
</td></tr>
</table>
</body>
</html>