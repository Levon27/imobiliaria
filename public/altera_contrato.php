<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(['PUT'],'/contrato/{id}', function (Request $request, Response $response, array $args) use ($app) {
	if (!(logado())){
		return $response->withStatus(403); //usuario nao logado
	}
	
	$campos_bd = array ('id_proprietario','id_inquilino','valor','id_imovel');
	
	require("db.php");
	$id = $args['id'];
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
	

	$query = $pdo->prepare('UPDATE contrato SET '. $campos . 'WHERE id_contrato=? ');
	array_push($valores,$id);
	$query->execute($valores);
	
	//echo "$campos \n";
	//echo json_encode($valores);
	
	return $response->withStatus(200);
});