<?php 
	include("../../clases/titulado.class.php");
	$titulado = new titulado();
	$titulado->setsituacion($_POST["situacion"]);
	$titulado->setmotivo($_POST["motivo"]);
	
	echo $titulado->actualizatitulado();
	
	
?>
