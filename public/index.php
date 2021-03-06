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
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
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
require_once("envia_reclamacao.php");
define('ROOT_PATH',dirname(__FILE__));

$app->map(['GET','POST'],'/hello', function (Request $request, Response $response, array $args) {

	
	return $response;
	
});
$app->run();
?>