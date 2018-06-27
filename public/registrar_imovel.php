<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
session_start(); 

$app->map(['POST'],'/imovel', function (Request $request, Response $response, array $args) {
	
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	
	include("db.php");
	
	$imovel = json_decode($request->getBody(),true);
	
	$id_resp = $_SESSION["id"];
	
	$n_quartos = $imovel["n_quartos"];
	$n_banheiros = $imovel["n_banheiros"];
	$area = $imovel["area"];
	$cep = $imovel["cep"];
	$rua = $imovel["rua"];
	$bairro = $imovel["bairro"];
	$cidade = $imovel["cidade"];
	$valor_imovel = $imovel["valor_imovel"];
	$tipo = $imovel["tipo"];
	
	$query  = $pdo->prepare('INSERT INTO imoveis (id_responsavel,n_quartos,n_banheiros,valor_imovel,area,cep,rua,bairro,cidade,tipo) VALUES (?,?,?,?,?,?,?,?,?,?)');
	$query->execute([$id_resp,$n_quartos,$n_banheiros,$valor_imovel,$area,$cep,$rua,$bairro,$cidade,$tipo]);
	
	//echo "imovel registrado";
	
	return $response->withStatus(201);
});