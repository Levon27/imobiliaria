<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app = new \Slim\App;
require ("login.php");
$app->map(['GET','POST'],'/hello/', function (Request $request, Response $response, array $args) {
    require_once("db.php");
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
});
$app->run();
?>