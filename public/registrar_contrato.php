<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['POST'],'/registrar/contrato', function (Request $request, Response $response, array $args) {
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	if (!($_SESSION['tipo']=='inquilino'))
		return $response->withStatus(403);
	
	include("db.php");
	
	$contrato = json_decode($request->getBody(),true);

	$id_prop = $contrato["id_prop"];
	$id_inq = $_SESSION["id"];
	$id_imovel = $contrato["id_imovel"];
	
	$query = $pdo->prepare('INSERT INTO contrato (id_proprietario,id_inquilino,valor,id_imovel) VALUES (?,?,(SELECT valor_imovel FROM imoveis WHERE id_imovel=?),?)');
	$query->execute([$id_prop,$id_inq,$id_imovel,$id_imovel]);
	
	$query = $pdo->prepare('UPDATE imoveis SET alugado = 1 WHERE id_imovel=?');
	$query->execute([$id_imovel]);
	//echo "contrato registrado";
	return $response->withStatus(201);
});

?>