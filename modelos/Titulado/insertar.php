<?php 
	include("../../clases/titulado.class.php");
	$titulado = new titulado();
	$modificar= $titulado->altatitulado($_POST["id"],$_POST["situacion"], $_POST["motivo"]);
	if(strpos($modificar,"no")>0){$titulado = new titulado();
    $titulado->setid($_POST["id"]);
	$titulado->setsituacion($_POST["situacion"]);
	$titulado->setmotivo($_POST["motivo"]);
	echo $titulado->actualizatitulado();}
?>
