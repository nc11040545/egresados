
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
        </ul>
      </div>
     </div>
	   
   <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
    <h1 id="titulos" align="center" ></h1><hr>
      </div>
    <div class="clr"></div>
    header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=abc.xsl");
 
</body>
</html>
