<?php
	/*
	$host = '177.33.177.209:420';
	$db   = 'imobiliaria';
	$user = 'phpmyadmin';
	$pass = 'thiago123';
	$charset = 'utf8mb4';
	*/
	
	$host = '127.0.0.1';
	$db   = 'imobiliaria';
	$user = 'root';
	$pass = '';
	$charset = 'utf8mb4';
	
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$pdo = new PDO($dsn, $user, $pass);
?>