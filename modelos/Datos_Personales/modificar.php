<?php 
	include("../../clases/Datos_Personales.class.php");
	$Datos_Personales = new Datos_Personales();
	$Datos_Personales->setNombre($_POST["Nombre"]);
	$Datos_Personales->setPaterno($_POST["Paterno"]);
	$Datos_Personales->setMaterno($_POST["Materno"]);
	$Datos_Personales->setSexo($_POST["Sexo"]);
	$Datos_Personales->setTelefono($_POST["Telefono"]);
	$Datos_Personales->setCelular($_POST["Celular"]);
	$Datos_Personales->setDireccion($_POST["Direccion"]);
	$Datos_Personales->setCiudad($_POST["Ciudad"]);
	$Datos_Personales->setEstado($_POST["Estado"]);
	$Datos_Personales->setCarrera($_POST["Carrera"]);
	$Datos_Personales->setGeneracion($_POST["Generacion"]);
	$Datos_Personales->setRedes($_POST["Redes"]);
	$Datos_Personales->setCompartir($_POST["Compartir"]);
	echo $Datos_Personales->actualizaDatos_Personales();
?>
