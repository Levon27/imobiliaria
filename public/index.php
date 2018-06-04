<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app = new \Slim\App;
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
	$id = 1;
	$stmt = $pdo->prepare('SELECT * FROM autenticacao');
	$stmt->execute([]);
	while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo json_encode($data);
	}
    return $response;
});
$app->run();
?>