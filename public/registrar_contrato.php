<?php 
	if(!isset($_SESSION)) { 
    session_start(); 
}  

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['POST'],'/registrar/contrato', function (Request $request, Response $response, array $args) {
	
	include("db.php");
	
	$contrato = json_decode($request->getBody(),true);

	$id_prop = $contrato["id_prop"];
	$id_inq = $contrato["id_inq"];
	$valor = $contrato["valor"];
	$id_imovel = $contrato["id_imovel"];
	
	$query = $pdo->prepare('INSERT INTO contrato (id_proprietario,id_inquilino,valor,id_imovel) VALUES (?,?,?,?)');
	$query->execute([$id_prop,$id_inq,$valor,$id_imovel]);
	
	echo "imovel registrado";
});

?>