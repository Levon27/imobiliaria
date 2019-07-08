<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['PUT'],'/imovel/{id}', function (Request $request, Response $response, array $args) use ($app) {
	if (!(logado())){
		return $response->withStatus(401); //usuario nao logado
	}
	require("db.php");
	$id = $args['id'];
	$campos_bd = array ('id_responsavel','n_quartos','n_banheiros','valor_imovel','area','cep','rua','bairro','cidade','tipo');
	$alteracao = json_decode($request->getBody(),true);
	$valores = array();
	$campos = '';
	foreach ($alteracao as $campo => $valor){
		if (!(in_array($campo,$campos_bd)))
			return $response->withStatus(400);
		
		$campos =  $campos . ',' .$campo .' =? ' ;
		array_push($valores,$valor);
	}
	
	$campos = substr($campos,1);
	
	//$campos = '(' . $campos . ')';
	$query = $pdo->prepare('UPDATE imoveis SET '. $campos . 'WHERE id_imovel=? ');
	array_push($valores,$id);
	$query->execute($valores);
	
	//echo "$campos \n";
	//echo json_encode($valores);
	
	return $response->withStatus(200);
});