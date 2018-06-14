<?php 
	if(!isset($_SESSION)) { 
    session_start(); 
}  

$app->map(['POST'],'/registrar/imovel', function (Request $request, Response $response, array $args) {
	$imovel = json_decode($request->getBody(),true);
	$id_resp = $_SESSION["id"];
	$n_quartos = $imovel["n_quartos"];
	$n_banheiros = $imovel["n_banheiros"];
	$area = $imovel["area"];
	$cep = $imovel["cep"];
	$rua = $imovel["rua"];
	$bairro = $imovel["bairro"];
	$cidade = $imovel["cidade"];
	
	$query  = $pdo->prepare('INSERT INTO imoveis (id_responsavel,n_quartos,n_banheiros,area,cep,rua,bairro,cidade) VALUES (?,?,?,?,?,?,?,?)');
	$query->execute([$id_resp,$n_quartos,$n_banheiros,$area,$cep,$rua,$bairro,$cidade]);
	
	echo "imovel registrado";
	

});