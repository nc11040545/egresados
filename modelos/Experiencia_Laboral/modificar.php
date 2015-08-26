<?php 
	include("../../clases/experiencia_laboral.class.php");
	$experiencia_laboral = new Datos_Personales();
	$experiencia_laboral->settiempo($_POST["tiempo"]);
	$experiencia_laboral->settrabajando($_POST["trabajando"]);
	$experiencia_laboral->setejerciendo($_POST["ejerciendo"]);
	$experiencia_laboral->settrabajo($_POST["trabajo"]);
	$experiencia_laboral->setformal($_POST["formal"]);
	$experiencia_laboral->setnegocio($_POST["negocio"]);
	$experiencia_laboral->settelOficina($_POST["telOficina"]);
	$experiencia_laboral->setconocimeinto($_POST["conocimeinto"]);
	$experiencia_laboral->setcursos($_POST["cursos"]);
	$experiencia_laboral->setconferencias($_POST["conferencias"]);
	$experiencia_laboral->setapoyo($_POST["apoyo"]);
	
	echo $experiencia_laboral->actualizaexperiencia_laboral();
?>
