<?php
if(!isset($_SESSION)) { 
    session_start(); 
}  
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app = new \Slim\App;
require_once("login.php");
require_once("registrar.php");
require_once("login_conv.php");
require_once("logout.php");
require_once("registrar_imovel.php");
require_once("registrar_contrato.php");
require_once("remove_imovel.php");
require_once("remove_contrato.php");
require_once("procura_imovel.php");
require_once("nao_logado.php");
require_once("procura_contrato.php");
require_once("altera_imovel.php");
require_once("altera_contrato.php");
require_once("funcao_enviar_email.php");
define('ROOT_PATH',dirname(__FILE__));

$app->map(['GET','POST'],'/hello', function (Request $request, Response $response, array $args) {
	//require_once("nao_logado.php");
	
	//$name = $args['name'];
	/*
	----TESTE JSON----
	$parsedBody = $request->getBody();
	$pedido = json_decode($parsedBody,true);
	$texto = $pedido['nome'];
	$response->getBody()->write("$texto");
	*/
	
	/*
	$id = 2;
	$stmt = $pdo->prepare('SELECT * FROM autenticacao WHERE id_usuario=?');
	$stmt->execute([$id]);
	if ($data = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		echo json_encode($data);
	}
	*/	
	
	
	//---TESTE ENVIAR EMAIL---
	/*
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
		$mail->addAddress('raul.vaz@uol.com.br', 'Jonas das mamona');     // Add a recipient

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'mandar email funfo';
		$mail->Body    = 'Seu guei';
		

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
	*/
	$email = 'chahestian@hotmail.com';
	$nome = 'Levon';
	$reclamador = 'João';
	$mensagem = 'Rato entalado na privada';
	$endereco = 'Av. Paulista, 666';
	enviar_reclamacao($email,$nome,$mensagem,$reclamador,$endereco);
	return $response;
	
	echo " não deveria chegar aqui seu guei";
});
$app->run();
?>