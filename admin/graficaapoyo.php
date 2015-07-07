<head>
<meta charset="UTF-8">
<title>Grafica de Apoyos</title>
<style>
	.grafica{
		width:1000px;
		height=400px;
		display:inline-block;
	}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />	
<meta charset="UTF-8">
<title>INICIO DE SESIÓN</title>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../style.css" />
</head>
<body>
      <div class="clr"></div>
	  <div class="main">
	  <div class="header_resize">
	  <div class="header">
	  <img src="../images/logo.gif" width="338" aling="left" height="70" border="0" alt="logo">
	   </div>
   <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulo" align="center" >Gráfica de Apoyos</h1><hr>
      </div>
    <div class="clr"></div>
  </div>
<script src="../js/jquery.js"></script>

<script src="../src/excanvas.js"></script>
<script src="../src/jquery.jqplot.js"></script>


<link rel="stylesheet" href="../src/jquery.jqplot.css">
<script type="text/javascript" src="../src/plugins/jqplot.json2.js"></script>

<script type="text/javascript" src="../src/plugins/jqplot.pieRenderer.js"></script>
<script type="text/javascript" src="../src/plugins/jqplot.donutRenderer.js"></script>
<script src="../src/plugins/jqplot.barRenderer.js"></script>
<script src="../src/plugins/jqplot.categoryAxisRenderer.js"></script>
<script src="../src/plugins/jqplot.pointLabels.js"></script>
<script src="../src/plugins/jqplot.canvasTextRenderer.js"></script>
<script src="../src/plugins/jqplot.canvasAxisLabelRenderer.js"></script>
</head>
<body>
<div id="apoyo" class="grafica"></div>	
	
<script>
	$.get("apoyo.php",function(jsonData){
		 var plot1 = $.jqplot('apoyo',jsonData,
								{ 
									seriesDefaults: {
										renderer: jQuery.jqplot.PieRenderer, 
										rendererOptions: {
										showDataLabels: true
										}
									}, 
									legend: { show:true, location: 'e' }
								}
								);
		
		},"json");
		</script>
		<?php 
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

$sql =('SELECT COUNT( * ) AS total, apoyoServicio, apoyoResidentes, apoyoBolsa
FROM  `experiencia_laboral` 
WHERE  `experiencia_laboral`.id
GROUP BY apoyoServicio, apoyoResidentes, apoyoBolsa');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='1' bordercolor='#A52A2A' align='center'> 
    <tr>
		<td>Apoyo</td>
		<td>Total</td>
    </tr>
    "; 
     $total=0;
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr><td>".$row ["apoyo"]."</td><td> " .$row ["total"]."</td></tr>";	
	$total+=$row ["total"];
	}
	echo "<tr><td>Total</td><td>$total</td></tr>";
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
<a href="graficas.php"> <img src= "inicio.png" alt="INICIO" align="right"></a>
		
</body>
</html>
