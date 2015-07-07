<head>
<meta charset="UTF-8">
<title>Graficas con Jplot</title>
<style>
	.grafica{
		width:400px;
		height=400px;
		display:inline-block;
	}
</style>
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
	 echo "<table border='1' bordercolor='#A52A2A'> 
    <tr>
		<td>Apoyo</td>
		<td>Total</td>
    </tr>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["apoyo"]."</td><td> " .$row ["total"]."</td></tr>";	
	}
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
		
</body>
