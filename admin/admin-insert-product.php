<?php 
	session_start();
	require_once("../config.php");
	if (!$_SESSION['authorize']) {
		header("Location: login.php");
	}


	if (isset($_POST['submit'])) {
		$file_name = $_FILES['img']['name'];
		$directory = "../img/products/";
		// $image_type = array('jpg', 'png');

		$file_tempname = $_FILES['img']['tmp_name'];
		$path = $directory.$file_name;

		move_uploaded_file($file_tempname, $path);

		$pdo -> prepare("INSERT INTO products SET `title` = ?, `price` = ?, `description` = ?, `img` = ?, `category_id` = ?, `sale` = ?, `new` = ?") -> execute(array($_POST['title'], $_POST['price'], $_POST['description'], $file_name, $_POST['type'], $_POST['sale'], $_POST['new']));
		header("Location: ./admin.php");
	}
?>