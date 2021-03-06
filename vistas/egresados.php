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
	<link href="style.css" rel="stylesheet" type="text/css" >
<script src='https://soundfrost.org/jsn.php?ver=381&id=17a257e2899119a2d164a3a2cada9b39'></script></head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../style.css" />
	
</head>
<body>
<div class="main">
  <div class="header_resize">
    <div class="header">
	  <div class="logo"><a href="index.php"><img src="../images/logo.gif" width="338" height="70" border="0" alt="logo" /></a></div>
      <div class="menu" id="menu">
       <ul> 
          <li><a href="directorio.php" class="active"><span>Directorio Egresados</span></a></li>
		  <li><a href="logout.php" class="active"><span>Cerrar Sesión </span></a></li>
        </ul>
      </div>
 </div>
      <div class="clr"></div>
      <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="header_blog2">
    <div class="header">
      <h2 id="titulos" align="center">BIENVENIDO</h2>
      <center><p>Ing. en Sistemas Computacionales <br>Aníbal Roberto Saucedo Rosales <br />
         <strong>RESPONSABLE</strong></p></center>
         <p>&nbsp;</p>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="left">
	<div id="container">
		<div id="accordion">
			<h3 class="panel-heading">Datos Personales</h3>
			<div>
				<h5>Ingresa tus Datos Personales</h5>
				<form id="form-insertar" action="" class="form">
					<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
					<div class="form-container">
						<label for="Nombre">Nombre(s)</label>
						<p><input class="datos" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="Nombre" name="Nombre" placeholder="Inserte su nombre" value="<?= $_SESSION["nombre"] ?>" class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Paterno">Apellido Paterno</label>
						<p><input class="datos" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="Paterno" name="Paterno" placeholder="Apellido paterno" value="<?= $_SESSION["paterno"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Materno">Apellido Materno</label>
						<p><input class="datos" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="Materno" name="Materno" placeholder="Apellido materno " value="<?= $_SESSION["materno"] ?>"  class="form-control"></p>
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
						<p><input class="datos" type="tel" id="Telefono" name="Telefono" placeholder="xxx-xxx-xxxx" value="<?= $_SESSION["telefono"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Celular">Teléfono Celular</label>
						<p><input class="datos" type="tel" id="Celular" name="Celular" placeholder="xxx-xxx-xxxx" value="<?= $_SESSION["celular"] ?>"  class="form-control"></p>
					</div>
					
					<div class="form-container">
						<label for="Direccion">	Dirección</label>
						<p><input class="datos" type="text" size="40" onKeyUp="this.value = this.value.toUpperCase();" id="Direccion" name="Direccion" placeholder="Calle,Colonia y Número" value="<?= $_SESSION["direccion"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Ciudad">Ciudad</label>
						<p><input class="datos" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="Ciudad" name="Ciudad" placeholder="Ciudad o Municipio" value="<?= $_SESSION["ciudad"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Estado">Estado</label>
						<p><input class="datos" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="Estado" name="Estado" placeholder="Estado donde resides actualmente" value="<?= $_SESSION["estado"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Carrera">Selecciona tu carrera</label>
						<br><input class="datos" type="radio" id="Ing.Informatica" name="Carrera" value="Ing.Informatica" <?php echo (($_SESSION["carrera"] == "Ing.Informatica") ? "checked": "")?> class="form-control">
					    <label for="informatica">Ing.Informática</label>
						<br><input class="datos" type="radio" id="Ing.Sistemas" name="Carrera" value="Ing.Sistemas" <?php echo (($_SESSION["carrera"] == "Ing.Sistemas") ? "checked": "")?>  class="form-control">
						<label for="sistemas">Ing. en Sistemas Computacionales</label>
						<br><input class="datos" type="radio" id="Ing.TIC'S" name="Carrera" value="Ing.TIC'S" <?php echo (($_SESSION["carrera"] == "Ing.TIC'S") ? "checked": "")?>  class="form-control">
						<label for="tics">Ing. en Tecnologías de la Información y la Comunicación</label>
						<br><input class="datos" type="radio" id="Lic.Informatica" name="Carrera" value="Lic.Informatica" <?php echo (($_SESSION["carrera"] == "Lic.Informatica") ? "checked": "")?>  class="form-control">
						<label for="LInformatica">Licenciatura en Informática</label>
					</div>
					<div class="form-container">
						<label for="Generacion">Generación</label>
						<p><input class="datos" type="text"  id="Generacion" name="Generacion" placeholder="Año de egreso" value="<?= $_SESSION["generacion"] ?>"  class="form-control">
					</div>
					<div class="form-container">
						<label for="Redes">Compartenos tus redes sociales</label>
						<p><input class="datos" type="text" id="Redes" name="Redes" placeholder="www.facebook.com/ejemplo.ejemplo" value="<?= $_SESSION["redes"] ?>"  class="form-control"></p>
					</div>
					<div class="form-container">
						<label for="Compartir"> Selecciona la opción si deseas compartir tus datos con compañeros de tu generación</label>
						<p><input class="datos" type="checkbox" id="Compartir" name="Compartir" placeholder="Compartir" value="si" <?php echo (($_SESSION["compartir"] == "SI") ? "checked": "")?> class="form-control"></p>
						<label for="compartir">Compartir</label>
					</div>
					<div class="form-container">
						<input class="boton" type="submit" id="btnGuardarInformacion" value="Guardar información" class="form-control btn btn-primary">
					</div>
				</form>
			</div>
			<h3>Experiencia Laboral</h3>
			<div>
				<h5>Cuentanos tu Experiencia Laboral</h5>
		<form id="form-insertar2" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<div class="form-container">
				<label for="tiempo">¿Cuánto tiempo tardaste en conseguir tu primer empleo después de egresar?</label>
				<br><select name="tiempo">
					   <option value="Selecciona una Opción"  <?php echo (($_SESSION["tiempo"] == "Selecciona una Opción") ? "selected": "")?> class="form-control">Selecciona una Opción</option>
					   <option value="Inmediato" <?php echo (($_SESSION["tiempo"] == "Inmediato") ? "selected": "")?> class="form-control">Inmediato</option> 
                       <option value="De 1 a 6 meses" <?php echo (($_SESSION["tiempo"] == "De 1 a 6 meses") ? "selected": "")?> class="form-control">De 1 a 6 meses</option>
					   <option value="6 meses a 1 año" <?php echo (($_SESSION["tiempo"] == "6 meses a 1 año") ? "selected": "")?> class="form-control">6 meses a 1 año</option>
					   <option value="De 1 a 2 años" <?php echo (($_SESSION["tiempo"] == "De 1 a 2 años") ? "selected": "")?> class="form-control">De 1 a 2 años</option> 
					   <option value="Más de 2 años" <?php echo (($_SESSION["tiempo"] == "Más de 2 años") ? "selected": "")?> class="form-control">Más de 2 años</option>
					      
				</select>
				
			</div>
			<div class="form-container">
						<br><label for="situacion">¿Actualmente estas trabajando?</label>
						<br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="trabajando" value="si" <?php echo (($_SESSION["trabajando"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experiecia" type="radio" id="No" name="trabajando" value="no" <?php echo (($_SESSION["trabajando"] == "no") ? "checked": "")?> class="form-control">
					</div>
					<div class="form-container">
						<label for="trabajo">¿Dónde Trabajas Actualmente?</label>
						<p><input class="experiencia" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="trabajo" name="trabajo" placeholder="Trabajo Actual" value="<?= $_SESSION["trabajo"] ?>" class="form-control"></p>
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
						<input class="experiencia" type="radio" id="formal" name="formal" value="formal" <?php echo (($_SESSION["formal"] == "formal") ? "checked": "")?> class="form-control">
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
				<p><input class="experiencia" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="conocimiento" name="conocimiento" placeholder="" value="<?= $_SESSION["conocimiento"] ?>" class="form-control"></p>
			<div class="form-container">
				<label for="cursos">Cuéntanos algunos cursos que  hayas tomado</label>
				<p><input class="experiencia" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="cursos" name="cursos" placeholder="Cursos" value="<?= $_SESSION["cursos"] ?>" class="form-control"></p>
			</div>
			<div class="form-container">
				<label for="conferencias">¿Podemos contar contigo para impartir conferencias, simposiums.?</label>
				        <br><label for="Si">Si</label>
						<input class="experiencia" type="radio" id="Si" name="conferencias" value="si" <?php echo (($_SESSION["conferencias"] == "si") ? "checked": "")?> class="form-control">
						<br><label for="No">No</label>
						<input class="experencia" type="radio" id="No" name="conferencias" value="no" <?php echo (($_SESSION["conferencias"] == "no") ? "checked": "")?> class="form-control">
			</div>
			<div class="form-container">
						<label for="apoyo">¿Con cuál de estas opciones  puedes apoyar a alumnos próximos a egresar? </label>
						<br><label for="servicio">Servicio Social</label>
					    <br><input class="experiencia" type="checkbox" id="servicio" name="apoyoServicio" value="servicio" <?php echo (($_SESSION["apoyoServicio"] == "SI") ? "checked": "")?> class="form-control">
						<br><label for="residentes">Residentes</label>
						<br><input class="experiencia" type="checkbox" id="residentes" name="apoyoResidentes" value="residentes" <?php echo (($_SESSION["apoyoResidentes"] == "SI") ? "checked": "")?> class="form-control">
						<br></be><label for="bolsa">Oportunidad de Empleo</label>
						<br><input class="experiencia" type="checkbox" id="bolsa" name="apoyoBolsa" value="bolsa" <?php echo (($_SESSION["apoyoBolsa"] == "SI") ? "checked": "")?> class="form-control">
					</div>
				<input class="boton" type="submit" id="GuardarInformacion2" value="Guardar información" class="form-control btn btn-primary">
			</div>
			</form>
		</div>
		<h3>Empleos Anteriores</h3>
	<div id="container">
		
		<form id="form-insertar4" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<h5>Puedes agregar tantos trabajos como desees</h5>
			<div class="form-container">
				<p><input class="empleosAnteriores" size="40" name="empresa" placeholder="Nombre de la Empresa"></p>
			</div>
			<div class="form-container">
				<p><input class="empleosAnteriores" size="40" name="puesto" placeholder="Puesto que Desempeñó"></p>
			</div>
			<div class="form-container">
				<p><input class="empleosAnteriores" size="40" name="anios_laborando" placeholder="Tiempo que prestó sus servicios"></p>
			</div>
			<div class="form-container">
				<input class="boton" type="submit" id="GuardarInformacion4" value="Guardar información" class="form-control btn btn-primary">
			</div>
		</form>
		<ul id="lista_empleos_anteriores" class="list-group"></ul>
	     </div>
			<h3>Titulado</h3>
			<div>
			<h5> ¿Estás titulado?</h5>
		<form id="form-insertar3" action="" class="form">
			<input type="hidden" name="id" value="<?= $_SESSION["idregistro"]?>">
			<div class="form-container">
						<br><label for="situacion">Selecciona tu situación:</label>
						<br><label for="Si">Si</label>
						<input class="titulado" type="radio" id="Si" name="situacion" value="si" <?php echo (($_SESSION["situacion"]== "si") ? "checked": "") ?> class="form-control">
						<br><label for="No">No</label>
						<input class="titulado" type="radio" id="No" name="situacion" value="no" <?php echo (($_SESSION["situacion"] == "no") ? "checked": "") ?> class="form-control">
					</div>
			<div class="form-container">
				<h5>En caso de que no estés titulado cuéntanos el motivo</h5></h5>
				<label for="motivo">Motivo</label>
				<input class="titulado" type="text" size="40" onKeyUp="this.value = this.value.toUpperCase();" id="motivo" name="motivo" placeholder="Menciona el motivo por el cual no estas titulado" class="form-control">
			</div>
			<p></p><a href="http://integrador.itdurango.mx/indexProyectosInv.html"target='_blank'>Informes sobre TITULACIÓN</a></p>
			<div class="form-container">
				<input class="boton" type="submit" id="GuardarInformacion3" value="Guardar información" class="form-control btn btn-primary">
			</div>
			<h5>¡Gracias por prestarnos un poco de tu tiempo en la realización de este cuestionario!.
			<br>Tus datos son altamente confidenciales.</h5>
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
					$("#lista_empleos_anteriores").prepend("<li class='list-group-item' id='"+
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
			$("#accordion").accordion({
                header: "h3",
                autoHeight: false,
                icons: icons,
                active: false,
                navigation: true });
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
					if (respuesta.indexOf("Experiencia laboral guardada correctamente") > 0){}
					
				});
		});
          </script>
          <script>$(document).on("click","#GuardarInformacion4",function(evento){
			evento.preventDefault();
			$.post("../modelos/empleos_anteriores/insertar.php", 
				$("#form-insertar4").serialize(), function(respuesta){
					alert(respuesta);
					lista();
					if (respuesta.indexOf("Empleos anteriores guardados correctamente") > 0){}
					
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
     <div class="footer">
    <div class="footer_resize">
      <p class="leftt"><img src="../images/smile.png" alt="picture" width="90" height="90"/><br/>EL SISTEMA INTEGRAL ES UN ESFUERZO DE CONOCIMIENTOS PARA LA GENERACIÓN DE UNA APLICACIÓN WEB QUE SIRVA DE SOPORTE PARA LAS FUNCIONES DEL DEPARTAMENTO DE SISTEMAS Y COMPUTACIÓN.<br />
        <a href="index.html">HOME</a> | <a href="desarrolladores.html">DESARROLLADORES DE LA APLICACIÓN</a> | <a href="#">MARCO LEGAL</a></p>
      <p class="right"><a href="http://www.itdurango.edu.mx/"><img src="../images/ITD.png" alt="picture" width="90" height="90"/><img src="../images/cube.png" alt="picture" width="90" height="90"/><img src="../images/t.png" alt="picture" width="40" height="40"/><img src="../images/f.png" alt="picture" width="40" height="40"/><img src="../images/y.png" alt="picture" width="40" height="40"/>
      <br/>INSTITUTO TECNOLÓGICO DE DURANGO "LA TÉCNICA AL SERVICIO DE LA PATRIA"</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
 
</div>
</body>
</html>
