<?php 
	include("../../clases/registro.class.php");
	
	echo Registro::buscaRegistro($_GET["nombre"]);
?>
