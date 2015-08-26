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
	  <div class="logo"><img src="../images/logo.gif" width="338" aling="left" height="70" border="23" alt="logo"></div>
	         <div class="menu">
       <br><ul>
          <li><a href="graficas.php" class="active"><span>Gráficas</span></a></li>
          <li><a href="index.php" class="active"><span>Cerrar Sesión </span></a></li>
        </ul>
   <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="header_blog2">
    <div class="header">
    <h1 id="tituloDirectorio" align="left" >Directorio de Experiencia Laboral</h1><hr>
      </div>
    <div class="clr"></div>
 
    
  </div>
<?php
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

$sql =('SELECT COUNT( * ) AS total, trabajando, ejerciendo, trabajo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyoServicio, apoyoResidentes, apoyoBolsa, concat_ws(" ",`Nombre`, `Paterno`, Materno)nombre
FROM  `experiencia_laboral`, datos_personales where datos_personales.id = experiencia_laboral.id group by trabajando, ejerciendo, trabajo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyoServicio, apoyoResidentes, apoyoBolsa');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#A52A2A' align='center'> 
	 
   <br><br><br> <tr>
		<td>Nombre</td>
		<td>Trabajando</td>
		<td>Ejerciendo Carrera</td>	
		<td>Empresa Actual</td>	
		<td>Trabajo Formal</td>
		<td>Cuenta con Negocios</td>
		<td>Teléfono de Oficina</td>
		<td>Conocimiento</td>
		<td>Cursos</td>
		<td>Apoyo en Conferencias</td>
		<td>Apoyo en Servicio Social</td>
		<td>Apoyo para Residentes</td>
		<td>Apoyo en Bolsa de Trabajo</td>
   </tr>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["nombre"]."</td><td> " .$row ["trabajando"]."</td><td> " .$row ["ejerciendo"]."</td><td> " .$row ["trabajo"]."</td><td> ".$row ["formal"]."</td><td> " .$row ["negocio"]."</td><td> " .$row ["telOficina"]."</td> <td>" .$row ["conocimiento"]."</td><td> " .$row ["cursos"]."</td><td> " .$row ["conferencias"]."</td><td> " .$row ["apoyoServicio"]."</td><td> " .$row ["apoyoResidentes"]."</td><td> " .$row ["apoyoBolsa"]."</td> ";	
   }
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 

		

		
</body>
</html>



