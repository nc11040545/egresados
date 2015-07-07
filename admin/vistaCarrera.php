<html> 
<body> 
  
<?php 
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

$sql =('SELECT COUNT( * ) AS total, carrera FROM  `datos_personales` GROUP BY carrera');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table> 
    <tr>
		<td>carrera</td>
    </tr>"; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["carrera"]."</td></tr>";	
	}
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
  
</body> 
</html>
