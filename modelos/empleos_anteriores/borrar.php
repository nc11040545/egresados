<?php 
	include("../../clases/empleos_anteriores.class.php");
	$empleos_anteriores = new empleos_anteriores();
	echo $empleos_anteriores->bajaEmpleo($_POST["id"]);
?>
