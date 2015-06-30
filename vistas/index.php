<?php
session_start();
if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "chido.php";</script>'; 
}
else
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>INICIO DE SESIÓN</title>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div class="index">
    <h1>Sistema para el Seguimiento de Egresados del Departamento de Sistemas y Computación</h1><hr>
    <h2>INICIO DE SESIÓN</h2>
    <div id="formulario">
        <form id="form-validar" method="POST" action="return false" onsubmit="return false">
            <div id="resultado"></div>
            <p><input type="text" name="user" id="user" value="" placeholder="USUARIO"></p>
            <p><input type="password" name="pass" id="pass" value="" placeholder="*******"></p>
            <p></p><input type="submit" value="Entrar"  id="btnentrar"/></p>
            
            <a href="registro.php">REGISTRATE</a><br>
            
            
        <p>¿QU&Eacute; ES ESTE SISTEMA? </p>
		<p><article>Es el lugar indicado para tener comunicacion 
		directa con egresados del departamento de 
		sistemas y computacion, creando una 
		comunidad y medio para tener mas informacion 
		acerca de la vida laboral que han tenido los ex-alumnos.</article></p>
		
        </form>
       <script>
		   $(document).on("submit","#form-validar",function(evento){
			evento.preventDefault();
			debugger;
			$.post("../modelos/registro/validar.php", 
				$("#form-validar").serialize(), function(respuesta){
					if (respuesta.indexOf("si")>=0)
					
					{
						location.href="chido.php";
						}
						else {alert(respuesta);}
				});
		});
          </script>
    </div>
</div>
</body>
</html>
<?php
}
?>
