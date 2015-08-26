<?php 
	include("../../clases/Datos_Personales.class.php");
	
	echo Datos_Personales::buscaDatos($_GET["Nombre"], $_GET["servicio"], $_GET["residencia"], $_GET["bolsa"]);
?>
