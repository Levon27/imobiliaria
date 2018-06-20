<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->map(['POST'],'/logout', function (Request $request, Response $response, array $args) {
	//var_dump ($_SESSION);
	if (logado()){
		echo "deslogando...";
		session_destroy();		
	} else {
		echo "ja esta deslogado";
	}

	
	//var_dump ($_SESSION["id"]);
	return $response;
});
?>