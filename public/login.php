<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['POST'],'/login', function (Request $request, Response $response, array $args) {
	include("db.php");
	
	
	if (!(empty($_SESSION["id"]))){
		//echo "ja logou";
		return $response->withStatus(200); //usuario ja logado
		
	}
	
	$auth = json_decode($request->getBody(),true);
	$login = $auth["login"];
	$senha = $auth["pass"];
	//echo "$login  : $senha ";
	
	$query = $pdo->prepare('SELECT * FROM autenticacao WHERE email=? AND senha=?');
	$query->execute([$login,$senha]);
	
	
	if ($data = $query->fetch(PDO::FETCH_ASSOC)){
		$_SESSION["id"]  = $data["id_usuario"]; //usuario encontrado
		$_SESSION["tipo"] = $data["tipo"]; //senhorio ou inquilino
		echo $_SESSION["tipo"];
	} else {
		//return $response->withJson($request->getBody(),401); //login ou senha incorretos
		return $response->withStatus(401); //login ou senha incorretos
	}
	
	return $response->withStatus(200);
});
?>