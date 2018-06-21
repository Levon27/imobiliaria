<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['GET'],'/contrato/{id}', function (Request $request, Response $response, array $args) use ($app) {
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	
	require("db.php");
	$id_contrato = $args['id'];
	
	
	$query = $pdo->prepare('SELECT * FROM contrato WHERE id_contrato=?');
	
	$query->execute([$id_contrato]);
	
	if ($contrato = $query->fetch(PDO::FETCH_ASSOC)){
		return $response->withJson($contrato,200);
	} else {
		return $response->withStatus(404);
	}
		
	
	return $response;
});