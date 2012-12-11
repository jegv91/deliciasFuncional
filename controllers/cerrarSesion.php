<?php
session_start();
unset($_SESSION);
if(session_destroy()){
	header("location:../controllers/index.php");
}
?>