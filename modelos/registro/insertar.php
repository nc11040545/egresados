<?php 
	include("../../clases/registro.class.php");
	$registro = new Registro();
	echo $registro->altaRegistro($_POST["nombre"], $_POST["password"], $_POST["cpassword"], $_POST["correo"]);
?>
