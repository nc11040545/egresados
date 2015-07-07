<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT case(sexo) when "H" then "HOMBRE" else "MUJER" end as sexo, COUNT( * ) AS total, carrera FROM  `datos_personales` , experiencia_laboral WHERE datos_personales.id = experiencia_laboral.id GROUP BY sexo, carrera';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos[0][$i][0] = $hob["carrera"]. " ".$hob["sexo"];
	$datos[0][$i][1] = $hob["total"]/100;
	$i++;
}
echo json_encode($datos);
?>
