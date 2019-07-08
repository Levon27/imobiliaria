<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['DELETE'],'/imovel/{id}', function (Request $request, Response $response, array $args) {
	if (!(logado())){
		return $response->withStatus(401); //usuario nao logado
	}
	require("db.php");
	
	$id_imovel = $args['id'];
	
	$query = $pdo->prepare('DELETE FROM imoveis WHERE id_imovel = ?');
	$query->execute([$id_imovel]);
	
	
	return $response->withStatus(200);
});
?>