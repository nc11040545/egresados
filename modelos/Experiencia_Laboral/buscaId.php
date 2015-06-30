<?php 
	include("../../clases/Experiencia_Laboral.class.php");
	
	echo Experiencia_Laboral::buscaExperiencia_Laboral($_POST["exp_id"]);
?>
