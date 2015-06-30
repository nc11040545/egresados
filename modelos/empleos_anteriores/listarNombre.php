<?php 
	include("../../clases/empleos_anteriores.class.php");
	
	echo empleos_anteriores::buscaempleos_anteriores($_GET["empresa"]);
?>
