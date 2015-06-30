<!DOCTYPE html>
<html lang="es">
<head>
	
<meta charset="UTF-8">
<title>REGISTRO</title>
<link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />
<link rel="stylesheet" href="../style.css" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
	<form id="form-insertar" method="post" action="">
           <div class="contacto">
			   <img src="../images/logo.gif" width="338" aling="left" height="70" border="0" alt="logo">
               <h1>Sistema para el Seguimiento de Egresados del Departamento de Sistemas y Computación</h1><hr>
               <h2>REGISTRATE</h2>
			   <label>Nombre:</label>
			   <input type="text" name="nombre"><br>
			   <label>Contraseña:</label>
			   <input type="password" name="password" required ><br>
			   <label>Repite Password:</label>
			   <input type="password" name="cpassword" required><br>
			   <label>Correo:</label>
			   <input type="email" name="correo" required><br>
			  <br> <input type="submit" value="Registrar"  id="btnregistrar"/>
          </div> 
    </form> 
   

          <script>$(document).on("submit","#form-insertar",function(evento){
			evento.preventDefault();
			if ($("input[name=nombre]").val()!="" && $("input[name=password]").val()!="" && $("input[name=cpassword]").val()!="" &&$("input[name=correo]").val()!=""){
				pas1 = $("input[name=password]").val();
				pas2 = $("input[name=cpassword]").val();
				if (pas1 == pas2){
					$.post("../modelos/registro/insertar.php", 
						$("#form-insertar").serialize(), function(respuesta){
							alert(respuesta);
							if (respuesta.indexOf("correctamente") > 0)
							{
								location.href="index.php";
								}
						});
					}else{ 
						alert("Las contraseñas no coinciden");
						}
			}else{
				alert("Todos los campos son obligatorios");
				}
		});
          </script>
 </body> 
 </html> 
            

