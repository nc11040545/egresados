<?php
error_reporting(0);
session_start();
$conexion = new mysqli("localhost", "root", "", "login");
if ($conexion->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       exit();
}
@mysqli_query($conexion, "SET NAMES 'utf8'");
if ($_POST['user'] == null || $_POST['pass'] == null)
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $user = mysqli_real_escape_string($conexion, $_POST['user']);
    $pass = mysqli_real_escape_string($conexion, $_POST['pass']); 
    $consulta = mysqli_query($conexion, "SELECT user, pass FROM usuario WHERE user = '$user' AND pass = '$pass'");
    if (mysqli_num_rows($consulta) > 0)
    {
        $_SESSION["usuario"] = $user;
        echo '<script>location.href = "chido.php"</script>';
    }
    else
    {
        echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
    }
}
?>
