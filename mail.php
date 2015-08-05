<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
require 'conexion.class.php';

 
 $correo=$_POST["email"];
 $sql= "select * FROM registro where correo = '$correo'"; 
 $conexion = new Conexion();
 $q= mysqli_query($conexion->link, $sql) or die(mysqli_error($conexion->link));
 $r= mysqli_fetch_assoc($q);
 $numero_registros = mysqli_num_rows($q);
if ($numero_registros > 0){
echo "$numero_registros registros\n";

 

$mail = new PHPMailer();
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'deptpsistemascomputacion2@gmail.com';                   // SMTP username
$mail->Password = '@sistemasdos';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('deptpsistemascomputacion2@gmail.com', 'Departamento de Sistemas y Computación');     //Set who the message is to be sent from
//$mail->addReplyTo('ykn_1089@hotmail.com', 'Martinez');  //Set an alternative reply-to address
$mail->addAddress($correo, $r["usuario"]);  // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = 'Recuperación de Contraseña';
$mail->Body    = 'Hola, hemos recibido un correo para recuperar tu contraseña.!  <b>'.$r["password"].'</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
if(!$mail->send()) {
   echo 'El mensaje no pudo ser enviado.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'El mesaje ha sido enviado';
}else{
	echo "Correo no registrado";
	}
?>
