<? 
	error_reporting(E_ERROR | E_PARSE);
	session_start();
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
			<form action="check.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Логин" name="login">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Пароль" name="pass">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" name="submit">Войти</button>
				</div>
				<div class="form-group">
					<a href="registration.php" class="btn btn-primary btn-block">Регистрация</a>
				</div>
				<?php
					if ($_GET['denied']) { 
				?>
						<p class="alert-denied">Неверный логин и/или пароль</p>
				<?
					}
				?>
			</form>
			<p class="text-center"><a href="index1.php" class="text-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

	<?php include("./templates/_footer.php"); ?>

	<script src="./js/script.js"></script>
</body>

</html>
