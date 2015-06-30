<?php 
	include("../../clases/empleos_anteriores.class.php");
	session_start();
	echo empleos_anteriores::listaempleos_anteriores($_SESSION["idregistro"]);
?>
