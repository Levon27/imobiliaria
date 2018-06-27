<?php

	$host = '177.33.177.209:420';
	$db   = 'imobiliaria';
	$user = 'phpmyadmin';
	$pass = 'thiago123';
	$charset = 'utf8mb4';
	
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$pdo = new PDO($dsn, $user, $pass);
?>