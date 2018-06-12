<?php

if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
header("Content-Type: application/json");
$app->map(['POST'],'/registrar/', function (Request $request, Response $response, array $args) {
    require_once("db.php");
    
	$registro = json_decode($request->getBody(),true);
	
	$nome = $registro["nome"];
	$email = $registro["email"];
	$senha = $registro["senha"];
	$tipo = $registro["tipo"];
	
	$query = $pdo->prepare('INSERT INTO autenticacao (nome,email,senha,tipo) SELECT * FROM ( SELECT ?,?,?,?) AS temp WHERE NOT EXISTS (SELECT email FROM autenticacao WHERE email=?)');
	$query->execute([$nome,$email,$senha,$tipo,$email]);
	
	var_dump ($registro);
	/*
	INSERT INTO autenticacao (nome,email,senha,tipo) 
	SELECT * FROM ( SELECT 'teste','teste@example.com','senhateste','inquilino') AS temp 
	WHERE NOT EXISTS (SELECT email FROM autenticacao WHERE email='teste@example.com')
	*/
	
	return $response;
});
?>