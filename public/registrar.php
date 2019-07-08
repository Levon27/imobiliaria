<?php

if(!isset($_SESSION)) { 
    session_start(); 
} 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['POST'],'/registrar', function (Request $request, Response $response, array $args) {
    require_once("db.php");
	$registro = json_decode($request->getBody(),true);
	
	$nome = $registro["nome"]; //nome completo
	$email = $registro["email"];
	$senha = $registro["senha"];
	$tipo = $registro["tipo"];
	$cpf = $registro["cpf"];
	$rg = $registro["rg"];
	$tel = $registro["tel"];
	
	$query = $pdo->prepare('INSERT INTO autenticacao (nome,email,senha,tipo) SELECT * FROM ( SELECT ?,?,?,?) AS temp WHERE NOT EXISTS (SELECT email FROM autenticacao WHERE email=?)');
	$query->execute([$nome,$email,$senha,$tipo,$email]);
	
	
	//recuperando id do usuario 
	
	$query = $pdo->prepare('SELECT id_usuario FROM autenticacao WHERE email=?');
	$query->execute([$email]);
	$res = $query->fetch(PDO::FETCH_ASSOC);
	
	$id = $res["id_usuario"];
	//echo "id encontrado $id ";
	
	$query = $pdo->prepare('INSERT INTO cliente (nome_completo,cpf,id_usuario,rg,email_contato,telcontato) SELECT * FROM ( SELECT ?,?,?,?,?,?) AS temp WHERE NOT EXISTS (SELECT email_contato FROM cliente WHERE email_contato=?)');
	$query->execute([$nome,$cpf,$id,$rg,$email,$tel,$email]);
	
	//echo "usuario criado";
	
	
	
	return $response->withStatus(201);
});



?>