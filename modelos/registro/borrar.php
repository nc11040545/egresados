<?php 
	include("../../clases/registro.class.php");
	$registro = new Registro();
	echo $registro->bajaRegistro($_POST["reg_id"]);
?>
