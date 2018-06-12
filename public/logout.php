<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app->map(['POST'],'/logout/', function (Request $request, Response $response, array $args) {
	//var_dump ($_SESSION);
	require_once("nao_logado.php");

	session_destroy();
	//var_dump ($_SESSION["id"]);
	
	return $response;
});
?>