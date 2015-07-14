<?php 
	include("../../clases/Datos_Personales.class.php");
	$Datos_Personales = new Datos_Personales();
	$_POST["Compartir"] = (isset($_POST["Compartir"])) ? "SI" : "NO";
	$modificar= $Datos_Personales->altaDatos_Personales($_POST["id"], $_POST["Nombre"], $_POST["Paterno"], $_POST["Materno"], $_POST["Control"], $_POST["Sexo"],$_POST["Telefono"], $_POST["Celular"], $_POST["Direccion"], $_POST["Ciudad"], $_POST["Estado"], $_POST["Carrera"], $_POST["Generacion"], $_POST["Correo"], $_POST["Redes"], $_POST["Compartir"]);
	
	
	if(strpos($modificar,"no")>0){$Datos_Personales = new Datos_Personales();
	$Datos_Personales->setid($_POST["id"]);
	$Datos_Personales->setNombre($_POST["Nombre"]);
	$Datos_Personales->setPaterno($_POST["Paterno"]);
	$Datos_Personales->setMaterno($_POST["Materno"]);
	$Datos_Personales->setControl($_POST["Control"]);
	$Datos_Personales->setSexo($_POST["Sexo"]);
	$Datos_Personales->setTelefono($_POST["Telefono"]);
	$Datos_Personales->setCelular($_POST["Celular"]);
	$Datos_Personales->setDireccion($_POST["Direccion"]);
	$Datos_Personales->setCiudad($_POST["Ciudad"]);
	$Datos_Personales->setEstado($_POST["Estado"]);
	$Datos_Personales->setCarrera($_POST["Carrera"]);
	$Datos_Personales->setGeneracion($_POST["Generacion"]);
	$Datos_Personales->setCorreo($_POST["Correo"]);
	$Datos_Personales->setRedes($_POST["Redes"]);
	$Datos_Personales->setCompartir($_POST["Compartir"]);
	echo $Datos_Personales->actualizaDatos_Personales();}
?>
