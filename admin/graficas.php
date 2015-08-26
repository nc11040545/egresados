<?php 
session_start();
if(!isset($_SESSION["usuario"])){
die("<script>lo-cation.href='index.php';</script>");}
//print_r($_SESSION);
//die();
?>
<!DOCTYPE html>
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
	  <div class="logo"><img src="../images/logo.gif" width="338" aling="left" height="70" border="23" alt="logo"></div>
	         <div class="menu">
       <br><ul>
          <li><a href="directorio.php" class="active"><span>Egresados</span></a></li>
          <li><a href="directorioempleos.php" class="active"><span>Empleos Anteriores </span></a></li>
          <li><a href="directorioexperiencia.php" class="active"><span>Experiencia Laboral</span></a></li>
		  <li><a href="index.php" class="active"><span>Cerrar Sesión </span></a></li>
		  <li><a href="impexcel.php" class="active"><span>Imprimir </span></a></li>
        </ul>
      </div>
     </div>
	   
   <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulos" align="center" >Gráficas</h1><hr>
      </div>
    <div class="clr"></div>
  </div><script src="../js/jquery.js"></script>

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
<script src="../src/plugins/jqplot.barRenderer.js"></script>
<script src="../src/plugins/jqplot.categoryAxisRenderer.js"></script>
<script src="../src/plugins/jqplot.pointLabels.js"></script>
</head>
</head>
<body>
<a href="graficasexo.php" div id="sexo" class="grafica"></a></div>	
<a href="graficatitulado.php" div id="titulado" class="grafica"></a></div>	
<a href="graficasexo_titulado.php" div id="sexo_titulado" class="grafica"></a></div>	
<a href="graficaejerciendo.php" div id="ejerciendo" class="grafica"></a></div>	
<a href="graficasexo_ejerciendo.php" div id="sexo_ejerciendo" class="grafica"></a></div>
<a href="graficacarrera.php" div id="carrera" class="grafica"></a></div>
<a href="graficasexo_carrera.php" div id="sexo_carrera" class="grafica"></a></div>
<a href="graficaciudad.php" div id="ciudad" class="grafica"></a></div>	
<a href="graficasexo_ciudad.php" div id="sexo_ciudad" class="grafica"></a></div>
<a href="graficaapoyo.php" div id="apoyo" class="grafica"></a></div>
<a href="graficaapoyor.php" div id="apoyor" class="grafica"></a></div>
<a href="graficaapoyob.php" div id="apoyob" class="grafica"></a></div>
<a href="graficatiempo.php" div id="tiempo" class="grafica"></a></div>
<a href="graficasexo_tiempo.php" div id="sexo_tiempo" class="grafica"></a></div>	

<script>
	$.get("sexo.php",function(jsonData){
		
		 var plot1 = $.jqplot('sexo',jsonData,
								{ 
									title: 'Gráfica de Género',
									
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
			$.get("titulado.php",function(jsonData){
		 var plot2 = $.jqplot('titulado',jsonData,
								{ 
									title: 'Gráfica de Titulados',
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
		$.get("sexo_titulado.php",function(jsonData){
		 var plot3 = $.jqplot('sexo_titulado',jsonData,
								{ 
									title: 'Gráfica de Titulados por Género',
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
		$.get("ejerciendo.php",function(jsonData){
		 var plot4 = $.jqplot('ejerciendo',jsonData,
								{ 
									title: 'Gráfica de Ejerciendo Carrera',
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
		$.get("sexo_ejerciendo.php",function(jsonData){
		 var plot5 = $.jqplot('sexo_ejerciendo',jsonData,
								{ 
									title:'Gráfica de Ejerciendo Carrera por Género',
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
		$.get("carrera.php",function(jsonData){
		 var plot6 = $.jqplot('carrera',jsonData,
								{ 
									title: 'Gráfica de Carrera',
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

		$.get("ciudad.php",function(jsonData){
    var plot1 = $.jqplot('ciudad', jsonData.cant, {
		title: 'Gráfica de Lugar donde Residen los Egresados',
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
		$.get("sexo_carrera.php",function(jsonData){
		 var plot9 = $.jqplot('sexo_carrera',jsonData,
								{ 
									title: 'Gráfica de Ejerciendo Carrera por Género',
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
		$.get("apoyo.php",function(jsonData){
		 var plot10 = $.jqplot('apoyo',jsonData,
								{ 
									title: 'Gráfica de Apoyos en servicio Social',
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
		$.get("apoyor.php",function(jsonData){
		 var plot10 = $.jqplot('apoyor',jsonData,
								{ 
									title: 'Gráfica de Apoyos en Residencias',
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
		$.get("apoyob.php",function(jsonData){
		 var plot10 = $.jqplot('apoyob',jsonData,
								{ 
									title: 'Gráfica de Apoyos en Bolsa de Trabajo',
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
		$.get("tiempo.php",function(jsonData){
		 var plot11 = $.jqplot('tiempo',jsonData,
								{ 
									title: 'Gráfica de Tiempo en Conseguir Empleo',
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
		$.get("sexo_tiempo.php",function(jsonData){
		 var plot12 = $.jqplot('sexo_tiempo',jsonData,
								{ 
									title: 'Gráfica de Tiempo en Conseguir Empleo por Género',
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
</body>
</html>
