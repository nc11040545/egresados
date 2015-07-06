 <h1 ALIGN=center>Sistema para el Seguimiento de Egresados del Departamento de Sistemas y Computación</h1><hr>
    <h2>INICIO DE SESIÓN</h2>
    <div id="formulario" class="contacto">
		
        <form id="form-validar" method="POST" action="return false" onsubmit="return false">
            <div id="resultado"></div>
            <p><input type="text" onKeyUp="this.value = this.value.toUpperCase();"  name="user" id="user" value="" placeholder="USUARIO"></p>
            <p><input type="password" name="pass" id="pass" value="" placeholder="*******"></p>
            <p></p><input type="submit" value="Entrar" class='boton'  id="btnentrar"/></p>
            
             </form>
      <! <script>
		  $(document).on("submit","#form-validar",function(evento){
            evento.preventDefault();
			debugger;
			$.post("../modelos/registro/validar.php", 
				$("#form-validar").serialize(), function(respuesta){
					if (respuesta.indexOf("si")>=0)
					
					{
						location.href="egresados.php";
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

?>
