<?php 
	include("../../clases/indexAdmin.class.php");
	$index_admin = new Admin();
	$index_admin->setusuario($_POST["usuario"]);
	$index_admin->setcontrasena($_POST["password"]);
	echo $index_admin->validarAdmin();
?>
