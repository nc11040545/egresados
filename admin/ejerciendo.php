<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT case(ejerciendo) when "si" then "EJERCIENDO" ELSE "NO EJERCIENDO" END AS ejerciendo, COUNT( * ) AS total FROM  `experiencia_laboral`  GROUP BY ejerciendo';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos[0][$i][0] = $hob["ejerciendo"];
	$datos[0][$i][1] = $hob["total"]/100;
	$i++;
}
echo json_encode($datos);
?>
