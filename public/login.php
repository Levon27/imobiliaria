<?php
session_start();
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app = new \Slim\App;
$app->map(['POST'],'/login/', function (Request $request, Response $response, array $args) {
	require_once("db.php");

	$auth = json_decode($request->getBody(),true);
	$login = $auth["login"];
	$senha = $auth["pass"];
	echo "$login  : $senha";
	
	$query = $pdo->prepare('SELECT * FROM autenticacao WHERE email=? AND senha=?');
	$query->execute([$login,$senha]);
	
	
	if ($data = $query->fetch(PDO::FETCH_ASSOC)){
		echo "logando usuario";

	} else {
		echo "usuario não encontrado";
	}

	return $response;
});
?>