<?php 
session_start();
//if(!isset($_SESSION["usuario"])){
//die("<script>lo-cation.href='index.php';</script>");}
//print_r($_SESSION);
//die();
?>
<!DOCTYPE html>
<html manifest=''>
<head>
<meta charset="UTF-8">
<title>Gráficas</title>
<html lang="es">
<head>
<link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />	
<meta charset="UTF-8">
<title>INICIO DE SESIÓN</title>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

</head>
<body>
<div class="main">
	  <div class="header_resize">
	  <div class="header">
	  <div class="logo"><img src="../images/logo.gif" width="338" aling="left" height="70" border="0" alt="logo"></div>
	         <div class="menu">
       <br><ul>
          <li><a href="index.php" class="active"><span>Inicio</span></a></li>
          <li><a href="directorio.php" class="active"><span>Directorio de Egresados</span></a></li>
		  <li><a href="index.php" class="active"><span>Cerrar Sesión </span></a></li>
        </ul>
      </div>
     </div>
	   
   <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulo" align="center" >GRÁFICAS</h1><hr>
      </div>
    <div class="clr"></div>
  </div>
  <script src="../src/jquery.jqplot.js"></script>


<link rel="stylesheet" href="../src/jquery.jqplot.css">

<script src="../src/plugins/jqplot.barRenderer.js"></script>
<script src="../src/plugins/jqplot.categoryAxisRenderer.js"></script>
<script src="../src/plugins/jqplot.pointLabels.js"></script>
</head>
<body>
<div id="chart1"></div>
<script>
$.get("ciudad.php",function(jsonData){
    var plot1 = $.jqplot('chart1', jsonData.cant, {
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
</body>
/*$.get("ciudad.php",function(jsonData){
		 var plot7 = $.jqplot('ciudad',jsonData,
								{ 
									title: 'Gráfica de Lugar donde Residen los Egresados',
									seriesDefaults: {
										renderer: jQuery.jqplot.PieRenderer, 
										rendererOptions: {
										showDataLabels: true
										}
									}, 
									legend: { show:true, location: 'e' }
								}
								);
		
		},"json"); */
