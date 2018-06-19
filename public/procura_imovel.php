<?php
if(!isset($_SESSION)) { 
    session_start(); 
}  

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['GET'],'/imovel/{id}', function (Request $request, Response $response, array $args) {
	require("db.php");
	
	
	
	$query = $pdo->prepare('');
	
	$query->execute([]);
	
	
	
	return $response;
});
?>