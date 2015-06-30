<?php 
	include("../../clases/empleos_anteriores.class.php");
	$empleos_anteriores = new Empleo();
	$empleos_anteriores->setempresa($_POST["empresa"]);
	$empleos_anteriores->setpuesto($_POST["puesto"]);
	$empleos_anteriores->setanios_laborando($_POST["anios_laborando"]);
	$empleos_anteriores->setid($_POST["aut_id"]);
	echo $empleos_anteriores->actualizaEmpleo();
?>
