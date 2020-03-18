<?php

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
require 'OAuth.php';
require 'rc4.php';

if ($_POST) {
	$key = $_POST['key'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$contenido = $_POST['contenido'];
	$data = rc4($key,$contenido, 0);

	$Desencripta = decryptRC4($key,$data);

	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();

	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "jtomokij@gmail.com";
	$mail->Password= "chambilla2";
	$mail->setFrom("jtomokij@gmail.com", "victor chambilla");
	$mail->addAddress($email, $nombre);
	$mail->Subject = $asunto;
	$msj = "<h4>Hola, este es un mensaje encriptado :)</h4>";
	$msj .="<p>".$data."</p>";
	$msj .="<p>Tu llave es esta: ".$key."</p>";
	$msj .="<a href='https://examplewebvc.000webhostapp.com/desencript.php'>Desencripta el mensaje AQUI!</a>";
	$msj .="<p>https://examplewebvc.000webhostapp.com/desencript.php</p>";
	$mail->Body = $msj;
	$mail->IsHtml(true);

	if (!$mail->send()) {
		//echo "erro al enviar el E-mail: ".$mail->ErrorInfo;
		echo("<script>location.href = 'error.php';</script>");
		/*header("Location: error.php");
		exit();*/
	} else {
	    echo("<script>location.href = 'success.php';</script>");
	    //exit(header("Location: /success.php"));
		/*header("Location: success.php");
		exit();*/
	}
} else {
	echo "no hay datos";
}

?>