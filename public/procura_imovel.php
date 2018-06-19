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
?>