<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$app->map(['POST'],'/reclamar', function (Request $request, Response $response, array $args) use ($app) {
	if (!(logado())){
		return $response->withStatus(401); //usuario nao logado
	}
	require("db.php");
	$campos = array ('id_contrato','mensagem');
	$reclamacao = json_decode($request->getBody(),true);
	
	//recuperar dados do cliente reclamador
	$id = $_SESSION['id'];
	
	$id_contrato = $reclamacao['id_contrato'];
	$mensagem = $reclamacao['mensagem'];
	//echo "$id";
	
	return $response->withStatus(400);
	
	$query = $pdo->prepare('SELECT * FROM cliente WHERE id_usuario=?');
	$query->execute([$id]);
	
	if ($reclamador = $query->fetch(PDO::FETCH_ASSOC)){
		$query = $pdo->prepare('SELECT * FROM cliente,imoveis WHERE id_responsavel = (SELECT id_proprietario FROM contrato WHERE id_inquilino = ?) AND id_usuario = (SELECT id_proprietario FROM contrato WHERE id_inquilino = ? AND id_contrato=?)');
		$query->execute([$id,$id,$id_contrato]);
		//echo json_encode($query->fetch(PDO::FETCH_ASSOC));
		if ($dados = $query->fetch(PDO::FETCH_ASSOC)){
			$email = $dados['email_contato'];
			$nome_completo = $dados['nome_completo'];
			$endereco = $dados['rua'];
			$nome_reclamador = $reclamador['nome_completo'];
			enviar_reclamacao($email,$nome_completo,$mensagem,$nome_reclamador,$endereco);
			
		} else {
			return $response->withStatus(404);
		}
		
		
	} else
		return $response->withStatus(404);
	
	return $response->withStatus(200);
	
});