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
    <h1 id="tituloDirectorio" align="left" >Directorio de Empleos Anteriores</h1><hr>
      </div>
    <div class="clr"></div>
   
  </div>
<?php
include("../clases/conexion.class.php");
$conexion = new Conexion(); 

 $sql =('SELECT COUNT( * ) AS total, id_usuario, empresa, puesto, anios_laborando, concat_ws(" ",`Nombre`, `Paterno`, Materno)nombre
FROM  `empleos_anteriores`, datos_personales where datos_personales.id = empleos_anteriores.id_usuario group by  id_usuario, empresa, puesto, anios_laborando');
$q = mysqli_query($conexion->link,$sql) or die(mysqli_error($conexion->link)); 

/*
$datos_personales= array();
$datos = array();
$i=0;*/
if ($q) {
	 echo "<table border='5' bordercolor='#A52A2A' align='center'> 
	 
    <br><br><tr>
		<td>Nombre</td>
		<td>Empresa</td>
		<td>Puesto</td>		
		<td>Años laborando</td>
   </tr>
    "; 
   
    while ($row = mysqli_fetch_array($q)) {
	echo "<tr> <td>".$row ["nombre"]."</td><td> " .$row ["empresa"]."</td><td> " .$row ["puesto"]."</td><td> " .$row ["anios_laborando"]."</td>";	
   }
   echo "</table>"; 
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
			$("#nombres").html("");
			$.get("../modelos/Datos_Personales/listarNombre.php",
				{"Nombre": $("#buscar").val()},
				function(registros){
				registros.forEach(function(registro, index){
					$("#nombres").append("<tr> <td>"+registro.Nombre+"</td><td> " +registro.Paterno+"</td><td> " +registro.Materno+"</td><td> " +registro.Generacion+"</td><td> " +registro.Redes+"</td><td> " +registro.Celular+"</td> ");
				}); //termina foreach
				$(".acciones").hide();
			},"json");
		})
	</script>
		
</body>
</html>



