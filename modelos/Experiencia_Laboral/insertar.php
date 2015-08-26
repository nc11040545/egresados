<?php 
	include("../../clases/Experiencia_Laboral.class.php");
	$Experiencia_Laboral = new Experiencia_Laboral();
	$_POST["apoyoServicio"] = (isset($_POST["apoyoServicio"])) ? "SI" : "NO";
	$_POST["apoyoResidentes"] = (isset($_POST["apoyoResidentes"])) ? "SI" : "NO";
	$_POST["apoyoBolsa"] = (isset($_POST["apoyoBolsa"])) ? "SI" : "NO";
	$modificar= $Experiencia_Laboral->altaExperiencia_Laboral($_POST["id"], $_POST["tiempo"], $_POST["trabajando"], 
	$_POST["ejerciendo"], $_POST["trabajo"], $_POST["formal"], $_POST["negocio"],$_POST["telOficina"], 
	$_POST["conocimiento"], $_POST["cursos"], $_POST["conferencias"], $_POST["apoyoServicio"], $_POST["apoyoResidentes"], $_POST["apoyoBolsa"]);
	if(strpos($modificar,"no")>0){
	
		$Experiencia_Laboral = new Experiencia_Laboral();
		$Experiencia_Laboral->setid($_POST["id"]);
		$Experiencia_Laboral->settiempo($_POST["tiempo"]);
		$Experiencia_Laboral->settrabajando($_POST["trabajando"]);
		$Experiencia_Laboral->setejerciendo($_POST["ejerciendo"]);
		$Experiencia_Laboral->settrabajo($_POST["trabajo"]);
		$Experiencia_Laboral->setformal($_POST["formal"]);
		$Experiencia_Laboral->setnegocios($_POST["negocio"]);
		$Experiencia_Laboral->settelOficina($_POST["telOficina"]);
		$Experiencia_Laboral->setconocimiento($_POST["conocimiento"]);
		$Experiencia_Laboral->setcursos($_POST["cursos"]);
		$Experiencia_Laboral->setconferencias($_POST["conferencias"]);
		$Experiencia_Laboral->setapoyoServicio($_POST["apoyoServicio"]);
		$Experiencia_Laboral->setapoyoResidentes($_POST["apoyoResidentes"]);
		$Experiencia_Laboral->setapoyoBolsa($_POST["apoyoBolsa"]);
		echo $Experiencia_Laboral->actualizaExperiencia_Laboral();	
	 }
?>
