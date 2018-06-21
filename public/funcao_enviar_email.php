<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviar_reclamacao($email,$nome,$mensagem,$reclamador,$endereco){
	$mail = new PHPMailer(true);
		try {
			//Server settings
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'imobimobiliaria@outlook.com';      // SMTP username
			$mail->Password = 'Softwaremuda';                     // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			//Recipients
			$mail->setFrom('imobimobiliaria@outlook.com', 'Mailer');
			$mail->addAddress($email, $nome);     // Add a recipient

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Reclamacao de um inquilino';
			$mail->Body    = 
			"<p> Ola, $nome. </p>
			<p> O inquilino $reclamador fez uma reclamacao com respeito ao seu imovel em $endereco : </p>
			<p> 	" $mensagem  "</p>
			<p> Esperamos que resolva o problema. </p> 
			<p> iMob, a imobiliaria do futuro. </p>";
			

			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
}