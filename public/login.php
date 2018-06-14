<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->map(['POST'],'/login/', function (Request $request, Response $response, array $args) {
	require_once("db.php");
	
	if (!(empty($_SESSION["id"]))){
		echo "usuario ja logado";
	}
	
	$auth = json_decode($request->getBody(),true);
	$login = $auth["login"];
	$senha = $auth["pass"];
	//echo "$login  : $senha ";
	
	$query = $pdo->prepare('SELECT * FROM autenticacao WHERE email=? AND senha=?');
	$query->execute([$login,$senha]);
	
	
	if ($data = $query->fetch(PDO::FETCH_ASSOC)){
		$_SESSION["id"]  = $data["id_usuario"];
		echo "usuario logado com sucesso";
	} else {
		echo "usuario não encontrado \n";
	}
	
	return $response;
});
?>