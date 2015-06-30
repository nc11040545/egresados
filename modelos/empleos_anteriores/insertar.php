<?php 
	include("../../clases/empleos_anteriores.class.php");
	$empleos_anteriores = new empleos_anteriores();
	echo $empleos_anteriores->altaempleos_anteriores($_POST["id"], $_POST["empresa"], $_POST["puesto"], $_POST["anios_laborando"]);
?>
