<? 
	session_start();
	error_reporting(E_ERROR | E_PARSE);
	if (!$_SESSION['admin'] && $_SESSION['authorize']) {
		header("Location: index.php");
	}
	if ($_SESSION['admin']) {
		header("Location: admin.php");
	}
?>
<?php include('./templates/_head.php'); ?>

<body>

	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">

			<!-- header -->
			<?php include("./templates/_header.php"); ?>
			<!-- // header -->

			<div class="line-between"></div>
			<form action="./insert-user.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Логин" name="login">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Имя" name="name">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Фамилия" name="surname">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Пароль" name="pass">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" name="submit">Регистрация</button>
				</div>
			</form>
		</div>
	</div>
	<!-- // white-plate -->

	<?php include("./templates/_footer.php"); ?>

	<script src="./js/script.js"></script>
</body>

</html>