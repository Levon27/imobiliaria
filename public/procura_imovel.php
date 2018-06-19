<?php
if(!isset($_SESSION)) { 
    session_start(); 
}  

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['GET'],'/imovel/{id}', function (Request $request, Response $response, array $args) {
	require("db.php");
	$id_imovel = $args['id'];
	
	
	$query = $pdo->prepare('SELECT * FROM imoveis WHERE id_imovel=?');
	
	$query->execute([$id_imovel]);
	
	$imovel = $query->fetch(PDO::FETCH_ASSOC);
	
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
		echo "nenhum imovel encontrado";
	}
	
	return $response;
});

?>