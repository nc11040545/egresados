
<!DOCTYPE html>
<html lang="es">
  <head>
	   <link rel="Shortcut Icon" type="image/x-icon" href="../images/cube.ico" />	
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="../css/bootstrap.min.css">
			<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="../style.css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Recuperar Contraseña </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
    <div class="container" role="main">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"> Restaurar Contraseña </div>
            <div class="panel-body">
              <p></p>
              <form method="post" action="http://localhost/egresados/mail.php">
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
				  
                  <input type="submit" value="Enviar" /> 
               
              </div>
            </div>
          </div>
        </form>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

   
  </body>
</html>
