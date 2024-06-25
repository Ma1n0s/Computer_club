<?php

$host = 'localhost';
$db = 'adm1234';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	$opt = array (
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	);
	$pdo = new PDO("mysql:host=localhost;dbname=adm1234;charset=utf8", 'root', '', $opt);
?>