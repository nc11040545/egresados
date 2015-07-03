<?php
include("../clases/conexion.class.php");
$conexion = new Conexion();

$sql = 'SELECT case(situacion) when "si" then "TITULADO" ELSE "PASANTE" END AS situacion,case(sexo) when "H" then "HOMBRE" else "MUJER" end as sexo,  COUNT( * ) AS total
FROM  `datos_personales` , titulado
WHERE datos_personales.id = titulado.id
GROUP BY sexo, situacion';
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link));



$datos_personales= array();
$datos = array();
$i=0;
while ($hob= mysqli_fetch_array($q))
{
	$datos[0][$i][0] = $hob["situacion"]. " ".$hob["sexo"];
	$datos[0][$i][1] = $hob["total"]/100;
	$i++;
}
echo json_encode($datos);
?>
