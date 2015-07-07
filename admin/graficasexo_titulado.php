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
 <h2 id="titulo" align="center">Gráfica de Titulados por Género</h2><hr>
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
<div id="sexo_titulado" class="grafica"></div>	
	
<script>
	$.get("sexo_titulado.php",function(jsonData){
		 var plot1 = $.jqplot('sexo_titulado',jsonData,
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

$sql =('SELECT case(situacion) when "si" then "TITULADO" ELSE "PASANTE" END AS situacion,case(sexo) when "H" then "HOMBRE" else "MUJER" end as sexo,  COUNT( * ) AS total
FROM  `datos_personales` , titulado
WHERE datos_personales.id = titulado.id
GROUP BY sexo, situacion');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='1'  bordercolor='#A52A2A'>
    <tr>
		<td>Situación</td>
		<td>Sexo</td>
		<td>Total</td>
    </tr>
    "; 
   $total=0;
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr><td>".$row ["situacion"]."</td><td> " .$row ["sexo"]."</td><td> "  .$row ["total"]."</td></tr>";	
  $total+=$row ["total"];
	}
	echo "<tr><td>Total</td><td></td><td>$total</td></tr>";
   echo "</table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 
		
</body>
