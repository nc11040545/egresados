<?php 
	include("../../clases/registro.class.php");
	
	echo Registro::buscaRegistro($_POST["reg_id"]);
?>
