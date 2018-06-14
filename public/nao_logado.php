<?php
	if (empty($_SESSION["id"])){
		$app = Slim::getInstance();
		echo "usuario não logado";
		$app->redirect('/hello/');
	}
?>