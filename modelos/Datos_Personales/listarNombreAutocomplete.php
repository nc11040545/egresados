<?php 
	include("../../clases/Datos_Personales.class.php");
	
	echo Datos_Personales::buscaDatos_Personales($_GET["term"]);
?>
