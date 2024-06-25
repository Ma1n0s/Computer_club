<?php
	session_start();
	require_once("./config.php");

	if (isset($_POST['submit'])) {
		$pdo -> prepare("INSERT INTO `users` SET `user` = ?, `password` = ?, `role` = 'user', `Name` = ?, `Surname` = ?, Telephone = ''") -> execute(array($_POST['login'], md5($_POST['pass']), $_POST['name'], $_POST['surname']));
		header("Location: ./login.php");
	}
?>