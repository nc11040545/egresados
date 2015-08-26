<head>
<meta charset="UTF-8">
<title>Grafica Carrera</title>
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
		<div class="main">
	  <div class="header_resize">
	  <div class="header">
	  <div class="logo"><img src="../images/logo.gif" width="338" aling="left" height="70" border="23" alt="logo"></div>
	         <div class="menu">
       <br><ul>
          <li><a href="graficas.php" class="active"><span>Gráficas</span></a></li>
          <li><a href="index.php" class="active"><span>Cerrar Sesión </span></a></li>
        </ul>
      </div>
     </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulo" align="center" >Gráfica de Carreras</h1><hr>
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
<div id="carrera" class="grafica"></div>	
	
<script>
	$.get("carrera.php",function(jsonData){
		 var plot1 = $.jqplot('carrera',jsonData,
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

$sql =('SELECT COUNT( * ) AS total, carrera FROM  `datos_personales` GROUP BY carrera');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#8A0808' align='center'>  
    <tr>
		<td>Carrera</td>
		<td>Total</td>
    </tr>
    "; 
   $total=0;
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["carrera"]."</td><td> " .$row ["total"]."</td></tr>";	
	$total+=$row ["total"];
	}
	echo "<tr><td>Total</td><td>$total</td></tr>";
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
		
</body>
</html>
