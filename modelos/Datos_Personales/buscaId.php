<?php 
	include("../../clases/Datos_Personales.class.php");
	
	echo Datos_Personales::buscaDatos_Personales($_POST["datos_id"]);
?>
