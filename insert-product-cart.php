<?php 
	session_start();
	require_once('./config.php');
	$pdo -> prepare("INSERT INTO carts SET `id_user` = ?, `id_product` = ?") -> execute(array($_POST['idUser'], $_POST['idProduct']));
?>