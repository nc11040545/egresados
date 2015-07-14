<?php 
	include("../../clases/indexAdmin.class.php");
	$indexAdmin = new indexAdmin();
	$indexAdmin->setusuario($_POST["usuario"]);
	$indexAdmin->setcontrasena($_POST["password"]);
	echo $indexAdmin->validarAdmin();
?>
