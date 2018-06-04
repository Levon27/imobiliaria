<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app = new \Slim\App;
$app->map(['GET','POST'],'/hello/', function (Request $request, Response $response, array $args) {
    
    //$name = $args['name'];
    $parsedBody = $request->getBody();
    $pedido = json_decode($parsedBody,true);
	$texto = $pedido['nome'];
    $response->getBody()->write("$texto");
    
    return $response;
});
$app->run();
?>