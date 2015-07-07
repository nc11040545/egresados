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
<a href="graficatiempo.php" div id="tiempo" class="grafica"></a></div>
<a href="graficasexo_tiempo.php" div id="sexo_tiempo" class="grafica"></a></div>	

<script>
	$.get("sexo.php",function(jsonData){
		 var plot1 = $.jqplot('sexo',jsonData,
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
			$.get("titulado.php",function(jsonData){
		 var plot2 = $.jqplot('titulado',jsonData,
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
		$.get("sexo_titulado.php",function(jsonData){
		 var plot2 = $.jqplot('sexo_titulado',jsonData,
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
		$.get("ejerciendo.php",function(jsonData){
		 var plot2 = $.jqplot('ejerciendo',jsonData,
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
		$.get("sexo_ejerciendo.php",function(jsonData){
		 var plot2 = $.jqplot('sexo_ejerciendo',jsonData,
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
		$.get("carrera.php",function(jsonData){
		 var plot2 = $.jqplot('carrera',jsonData,
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
		$.get("ciudad.php",function(jsonData){
		 var plot1 = $.jqplot('ciudad',jsonData,
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
		$.get("sexo_ciudad.php",function(jsonData){
		 var plot2 = $.jqplot('sexo_ciudad',jsonData,
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
		$.get("sexo_carrera.php",function(jsonData){
		 var plot2 = $.jqplot('sexo_carrera',jsonData,
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
		$.get("apoyo.php",function(jsonData){
		 var plot2 = $.jqplot('apoyo',jsonData,
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
		$.get("tiempo.php",function(jsonData){
		 var plot2 = $.jqplot('tiempo',jsonData,
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
		$.get("sexo_tiempo.php",function(jsonData){
		 var plot2 = $.jqplot('sexo_tiempo',jsonData,
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
</body>
