<?php 
	session_start();
	require_once('./config.php');
	$pdo -> prepare("DELETE FROM carts WHERE `id_product` = ?") -> execute(array($_POST['idProduct']));
?>