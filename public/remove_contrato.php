<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['DELETE'],'/contrato/{id}', function (Request $request, Response $response, array $args) {
	require("db.php");
	
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	$id_contrato = $args['id'];
	
	$query = $pdo->prepare('DELETE FROM contrato WHERE id_contrato = ?');
	$query->execute([$id_contrato]);
	
	echo "deletar contrato $id_contrato";
	
	return $response;
});
?>