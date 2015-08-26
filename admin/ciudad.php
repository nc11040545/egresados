<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT COUNT( * ) AS total, ciudad
FROM  `datos_personales` 
GROUP BY ciudad';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos["series"][$i]["label"] = $hob["ciudad"];
	$datos["cant"][$i][0] = $hob["total"]*1;
	$i++;
}
echo json_encode($datos);
?>

