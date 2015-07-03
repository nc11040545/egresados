<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT case(sexo) when "M" then "MUJERES" ELSE "HOMBRES" END AS sexo, count(*) as total FROM `datos_personales` group by sexo';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos[0][$i][0] = $hob["sexo"];
	$datos[0][$i][1] = $hob["total"]/100;
	$i++;
}
echo json_encode($datos);
?>
