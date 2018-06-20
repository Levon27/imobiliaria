<?php
if(!isset($_SESSION)) { 
    session_start(); 
}  
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

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
	while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo json_encode($data);
	}
	 
	*/
	echo "guei";
		
	
	return $response;
	
	echo " não deveria chegar aqui seu guei";
});
$app->run();
?>