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
    <h1 id="tituloDirectorio" align="left" >Directorio</h1><hr>
      </div>
    <div class="clr"></div>
    <section id="listado" >
			<input type="search" id="buscar" aling="center" placeholder="Buscar por nombre" >
			<ul id="lista_datos"></ul>
		
		<div class="form-container">
						<label for="servicio">Servicio Social</label>
					    <input class="experiencia" type="checkbox" id="servicio" name="apoyoServicio" value="servicio"  class="form-control">
						<label for="residentes">Residentes</label>
						<input class="experiencia" type="checkbox" id="residentes" name="apoyoResidentes" value="residentes" class="form-control">
						<label for="bolsa">Bolsa de Trabajo</label>
						<input class="experiencia" type="checkbox" id="bolsa" name="apoyoBolsa" value="bolsa"  class="form-control">
					</div>
	 </section>
  </div>
<?php
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

$sql =('SELECT COUNT( * ) AS total, Nombre, Paterno, Materno, Generacion, Redes, Celular
FROM  `datos_personales` where  datos_personales.id group by  Nombre, Paterno, Materno, Generacion, Redes, Celular');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#A52A2A' align='center'> 
	 
    <br><br><tr>
		<td>Nombre</td>
		<td>Apellido Paterno</td>
		<td>Apellido materno</td>		
		<td>Generación</td>
		<td>Redes Sociales</td>
		<td>Teléfono Celular</td>
   </tr></br></br>
   <tbody id='nombres'>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["Nombre"]."</td><td> " .$row ["Paterno"]."</td><td> " .$row ["Materno"]."</td><td> " .$row ["Generacion"]."</td><td> " .$row ["Redes"]."</td><td> " .$row ["Celular"]."</td> ";	
   }
   echo "</tbody></table>"; 
} 
 else { 
 echo json_encode($datos); 
} 
?> 

<script type="text/javascript">
		function lista(){
			$("#nombres").html("");
			$.get("../modelos/Datos_Personales/listar.php",function(registros){
				registros.forEach(function(registro, index){
					$("#nombres").append("<tr> <td>"+registro.Nombre+"</td><td> " +registro.Paterno+"</td><td> " +registro.Materno+"</td><td> " +registro.Generacion+"</td><td> " +registro.Redes+"</td><td> " +registro.Celular+"</td> "
					);
				}); //termina foreach
				$(".acciones").hide();
			},"json");
		}
		lista();
		$(document).on("click","#insertar_datos",function(evento){
			evento.preventDefault();
			$.post("../modelos/Datos_Personales/insertar.php", 
				$("#form-insertar").serialize(), function(respuesta){
					alert(respuesta);
					lista();
				});
		});

		$(document).on("click", "#lista_datos li", function(){
			$(".acciones").hide();
			$(this).children().show(500);
		});

		$(document).on("click",".borrar", function(evento){
			var id = $(this).parent().parent().attr("id");
			$.post("../modelos/Datos_Personales/borrar.php", {"datos":id}, 
				function(respuesta){
					alert(respuesta);
					lista();
				});
		});

		$(document).on("click",".modifica", function(evento){
			var id = $(this).parent().parent().attr("id");
			$("#overlay").show(500, function(){
				$.post("../modelos/Datos_Personales/buscaId.php", {"id":id}, 
					function(respuesta){
						$("#Nombre").val(respuesta[0].datos_nombre);
						$("#Correo").val(respuesta[0].datos_email);
						$("#id").val(id);
					}, "json");

			});
		});
	
		$(document).on("click", "#modificar_datos", function(evento){
			evento.preventDefault();
			$.post("../modelos/Datos_Personales/modificar.php", 
				$("#frm_modificar").serialize(), function(respuesta){
					alert(respuesta);
					lista();
					$("#overlay").hide(500);
				});
		})
		$(document).on("keyup", "#buscar", function(){
			busca();
		});
		
		$(document).on("click", "#servicio", function(){busca();});
		$(document).on("click", "#residentes", function(){busca();});
		$(document).on("click", "#bolsa", function(){busca();});
		
		function busca(){
			$("#nombres").html("");
			$.get("../modelos/Datos_Personales/listarNombre.php",
				{"Nombre": $("#buscar").val(),
					"servicio" : ($("#servicio").is(":checked")) ? "SI" : "NO",
					"residencia" : ($("#residentes").is(":checked")) ? "SI" : "NO",
					"bolsa" : ($("#bolsa").is(":checked")) ? "SI" : "NO",
					
					},
				function(registros){
				registros.forEach(function(registro, index){
					$("#nombres").append("<tr> <td>"+registro.Nombre+"</td><td> " +registro.Paterno+"</td><td> " +registro.Materno+"</td><td> " +registro.Generacion+"</td><td> " +registro.Redes+"</td><td> " +registro.Celular+"</td> ");
				}); //termina foreach
				$(".acciones").hide();
			},"json");
			}
	</script>
		
</body>
</html>


