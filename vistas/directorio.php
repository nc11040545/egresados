<!DOCTYPE html>
<html lang="es">
<head>
<link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />	
<meta charset="UTF-8">
<title>DIRECTORIO </title>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div class="main">
  <div class="header_resize">
    <div class="header">
	  <div class="logo"><a href="index.php"><img src="../images/logo.gif" width="338" height="70" border="0" alt="logo" /></a></div>
      <div class="menu" id="menu">
       <ul> 
          <li><a href="egresados.php" class="active"><span>Inicio</span></a></li>
		  <li><a href="logout.php" class="active"><span>Cerrar Sesión </span></a></li>
        </ul>
      </div>
 </div>
      <div class="clr"></div>
      <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="header_blog2">
    <div class="header">
    <h1 id="titulos" align="left" >Directorio</h1><hr>
      </div>
    <div class="clr"></div>
  </div>
<?php
include("../clases/conexion.class.php");
$conexion = new Conexion(); 
session_start();
  $sql =('SELECT COUNT( * ) AS total, Nombre, Paterno, Materno, Generacion, Redes, Celular, Compartir 
FROM  `datos_personales` WHERE Generacion ="'.$_SESSION["generacion"].'"'); 
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 
//$r= mysqli_fetch_assoc($q);

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#A52A2A' align='center'> 
	 
    <tr>
		<td>Nombre</td>
		<td>Apellido Paterno</td>
		<td>Apellido materno</td>		
		<td>Generación</td>
		<td>Redes Sociales</td>
		<td>Teléfono Celular</td>
   </tr>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
		if ($row["Compartir"] == "SI"){
	echo "<tr> <td>".$row ["Nombre"]."</td><td> " .$row ["Paterno"]."</td><td> " .$row ["Materno"]."</td><td> " .$row ["Generacion"]."</td><td> " .$row ["Redes"]."</td><td> " .$row ["Celular"]."</td>";	
}
   }
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
 
		
</body>
</html>


