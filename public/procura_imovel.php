<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['GET'],'/imovel/{id}', function (Request $request, Response $response, array $args) use ($app) {
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	
	require("db.php");
	$id_imovel = $args['id'];
	
	
	$query = $pdo->prepare('SELECT * FROM imoveis WHERE id_imovel=?');
	
	$query->execute([$id_imovel]);
	
	if ($imovel = $query->fetch(PDO::FETCH_ASSOC)){
		return $response->withHeader(201);
	} else {
		return $response->withHeader(404);
	}
		
	
	return $response;
});

$app->map(['GET'],'/imovel/{tipo}/{cidade}', function (Request $request, Response $response, array $args) {
	$n = 0;
	require("db.php");
	$cidade = $args['cidade'];
	$cidade = str_replace("_"," ",$cidade);
	$cidade = ucwords($cidade);
	$tipo = $args['tipo'];
	
	echo "cidade: $cidade";
	
	$query = $pdo->prepare('SELECT * FROM imoveis WHERE cidade LIKE ? AND tipo LIKE ?');
	$query->execute([$cidade,$tipo]);
	
	while ($data = $query->fetch(PDO::FETCH_ASSOC)){
		
		echo json_encode($data);
		$n++;
	}
	
	if ($n==0){
		return $response->withHeader(404);
	}
	
	return $response->withHeader(200);
});

$app->map(['GET'],'/imovel/{tipo}/{cidade}/{min}/{max}/{area}/{dorm}', function (Request $request, Response $response, array $args) {
	require("db.php");
	$n = 0;
	$cidade = $args['cidade'];
	$cidade = str_replace("_"," ",$cidade);
	$cidade = ucwords($cidade);
	$tipo = $args['tipo'];
	$min = $args['min'];
	$max = $args['max'];
	$area = $args['area'];
	$dorm = $args['dorm'];
	
	$query = $pdo->prepare('SELECT * FROM imoveis WHERE cidade LIKE ? AND tipo LIKE ? AND valor_imovel BETWEEN ? AND ? AND area BETWEEN 0.8*? AND 1.2*? AND n_quartos >=?');
	$query->execute([$cidade,$tipo,$min,$max,$area,$area,$dorm]);
	
	while ($data = $query->fetch(PDO::FETCH_ASSOC)){
		
		echo json_encode($data);
		$n++;
	}
	
	if ($n==0){
		return $response->withHeader(404);
	}
	
	return $response->withHeader(200);
});

?>