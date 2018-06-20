<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app->map(['POST'],'/login/convidado', function (Request $request, Response $response, array $args) {
	require_once("db.php");
	
	
	if (!(empty($_SESSION["id"]))){
		echo "usuario ja logado";
		return $response->withStatus(200);
	} else {
		$_SESSION["conv"] = true;
		echo " logado como convidado";
		return $response->withStatus(200);
	}
	
	return $response;
});
?>