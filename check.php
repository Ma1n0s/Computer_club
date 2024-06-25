<?php 
	session_start();
	require_once("config.php");
	$count = 0;
	$users = $pdo -> query("SELECT * FROM users") -> fetchAll();
	if (isset($_POST["submit"])) {
		foreach ($users as $user) {
			if ($_POST['login'] == $user['user'] && md5($_POST['pass']) == $user['password']) {
				if ($user['role'] == "administrator") {
					$_SESSION['admin'] = true;
				} else {
					$_SESSION['admin'] = false;
				}
				$_SESSION['id_user'] = $user['id_user'];
				$count++;
			}
		}
		if ($count > 0) {
			$_SESSION['authorize'] = true;
			$_SESSION['username'] = $_POST['login'];
			$_SESSION['password'] = md5($_POST['pass']);
			if ($user['role'] == "user") {
				header("Location: index.php");
			} else {
				header("Location: admin.php");
			}
		} else {
			header("Location: login.php?denied=true");
		}
	}

	if ($_GET['logout'] == 1) {
		$_SESSION['authorize'] = false;
		$_SESSION['admin'] = false;
		$_GET['logout'] = 0;
		header("Location: index.php");
		session_destroy();
	}
?>