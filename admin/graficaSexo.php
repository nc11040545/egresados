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
<div id="chart2" class="grafica"></div>	
	
<script>
	$.get("sexo.php",function(jsonData){
		 var plot1 = $.jqplot('chart2',jsonData,
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

$sql =('SELECT case(sexo) when "M" then "MUJERES" ELSE "HOMBRES" END AS sexo, count(*) as total FROM `datos_personales` group by sexo');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 


if ($q) {
	 echo "<table border='1' bordercolor='#A52A2A'> 
    <tr>
		<td>Sexo</td>
		<td>Total</td>
    </tr>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["sexo"]."</td><td> " .$row ["total"]."</td></tr>";	
	}
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
		
</body>
