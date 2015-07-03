<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT COUNT( * ) AS total, apoyoServicio, apoyoResidentes, apoyoBolsa
FROM  `experiencia_laboral` 
WHERE  `experiencia_laboral`.id
GROUP BY apoyoServicio, apoyoResidentes, apoyoBolsa';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos[0][$i][0] = $hob["apoyoServicio"]. " ".$hob["apoyoResidentes"]. " ".$hob["apoyoBolsa"];
	$datos[0][$i][1] = $hob["total"]/100;
	$i++;
}
echo json_encode($datos);
?>
