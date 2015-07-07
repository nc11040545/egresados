<?php 
	include("../../clases/admin.class.php");
	$index_admin = new Admin();
	$index_admin->setusuario($_POST["user"]);
	$index_admin->setpassword($_POST["pass"]);
	echo $index_admin->validarAdmin();
?>
