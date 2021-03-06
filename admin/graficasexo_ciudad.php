<head>
<meta charset="UTF-8">
<title>Grafica de Sexo_Residente</title>
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
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulo" align="center" >Gráfica Lugar donde Residen</h1><hr>
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
<div id="sexo_ciudad" class="grafica"></div>	
	
<script>
	$.get("sexo_ciudad.php",function(jsonData){
    var plot1 = $.jqplot('sexo_ciudad', jsonData.cant, {
		title: 'Gráfica de Lugar donde Residen los Egresados por Género',
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions: {fillToZero: true}
        },
        series:jsonData.series,
        legend: {
            show: true,
            placement: 'outsideGrid'
        },
        axes: {
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
            },
            yaxis: {
                pad: 1.05,
                tickOptions: {formatString: '$%d'}
            }
        }
    });
    },"json");
		</script>
		<?php 
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

$sql =('SELECT case(sexo) when "H" then "HOMBRE" else "MUJER" end as sexo, COUNT( * ) AS total, ciudad FROM  `datos_personales` WHERE datos_personales.id GROUP BY sexo, ciudad');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#8A0808' align='center'>  
    <tr>
		<td>Ciudad</td>
		<td>Sexo</td>
		<td>Total</td>
    </tr>
    "; 
   $total=0;
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["ciudad"]."</td><td> " .$row ["sexo"]."</td><td> "  .$row ["total"]."</td></tr>";	
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
</html>
