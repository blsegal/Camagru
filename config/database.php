<?php
	$HOSTNAME = "localhost:8080";
    $DB_DSN = "mysql:host=localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "salut123";

	header('Access-Control-Allow-Origin: localhost'); 
    header('Access-Control-Allow-Methods: GET, POST');
    header('Access-Control-Max-Age: 1000');

	if (session_status()==PHP_SESSION_NONE) session_start();

    try {
		$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		$pdo->exec("CREATE DATABASE IF NOT EXISTS `camagru`");
		$pdo->exec("USE camagru");
	} catch (PDOException $e) {
		var_dump($e);
		echo 'Échec lors de la connexion : ' . $e->getMessage();
		die();
	}
