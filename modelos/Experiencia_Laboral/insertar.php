<?php 
	include("../../clases/Experiencia_Laboral.class.php");
	$Experiencia_Laboral = new Experiencia_Laboral();
	$_POST["apoyo"] = (isset($_POST["servicio"])) ? "SI" : "NO";
	$_POST["apoyo"] = (isset($_POST["residentes"])) ? "SI" : "NO";
	$_POST["apoyo"] = (isset($_POST["bolsa"])) ? "SI" : "NO";
	$modificar= $Experiencia_Laboral->altaExperiencia_Laboral($_POST["id"], $_POST["tiempo"], $_POST["trabajando"], 
	$_POST["ejerciendo"], $_POST["formal"], $_POST["negocio"],$_POST["telOficina"], 
	$_POST["conocimiento"], $_POST["cursos"], $_POST["conferencias"], $_POST["apoyo"]);
	if(strpos($modificar,"no")>0){$Experiencia_Laboral = new Experiencia_Laboral();
	$Experiencia_Laboral->setid($_POST["id"]);
	$Experiencia_Laboral->settiempo($_POST["tiempo"]);
	$Experiencia_Laboral->settrabajando($_POST["trabajando"]);
	$Experiencia_Laboral->setejerciendo($_POST["ejerciendo"]);
	$Experiencia_Laboral->setformal($_POST["formal"]);
	$Experiencia_Laboral->setnegocio($_POST["negocio"]);
	$Experiencia_Laboral->settelOficina($_POST["telOficina"]);
	$Experiencia_Laboral->setconocimeinto($_POST["conocimeinto"]);
	$Experiencia_Laboral->setcursos($_POST["cursos"]);
	$Experiencia_Laboral->setconferencias($_POST["conferencias"]);
	$Experiencia_Laboral->setapoyo($_POST["apoyo"]);
	
	echo $Experiencia_Laboral->actualizaExperiencia_Laboral(); }
?>
