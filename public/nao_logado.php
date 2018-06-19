<?php
	if (empty($_SESSION["id"])){
		
		echo "usuario não logado";
		$app->redirect('/hello/');
	}
?>