<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once('./config.php');
        include('./templates/_head.php');
    ?>
</head>
<body>
    <!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include('./templates/_header.php'); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-lg-12 d-flex align-items-center flex-column">
					<h1 class="personal__area--title">Личный кабинет</h1>
					<? if(isset($_GET['userId'])) {
						$sql = "SELECT * FROM `users` WHERE id_user=?";
						$rez = $pdo->prepare($sql);
						$rez->execute(array("$_GET[userId]"));
						$current_user = $rez -> fetch();
					?>
					<form action="./edit-personal-area.php" method="POst" style="width:50%">
						<input type="hidden" name="ID" value="<?php echo $current_user['id_user']?>">
						<div class="form-group d-flex flex-column">
							<label for="login">Логин:</label>
							<input name="login" type="text" value="<?php echo $current_user['user']?>">
						</div>
						<div class="form-group d-flex flex-column">
							<label for="password">Пароль:</label>
							<input type="password" name="password" type="text" value="<?php echo $current_user['password']?>">
						</div>
						<div class="form-group d-flex flex-column">
							<label for="name">Имя:</label>
							<input name="name" type="text" value="<?php echo $current_user['Name']?>">
						</div>
						<div class="form-group d-flex flex-column">
							<label for="surname">Фамилия:</label>
							<input name="surname" type="text" value="<?php echo $current_user['Surname']?>">
						</div>
						<div class="form-group d-flex flex-column">
							<label for="phone"> Телефон:</label>
							<input name="phone" type="text" value="<?php echo $current_user['Telephone']?>">
						</div>
						<div class="form-group d-flex flex-column">
							<button class="btn btn-primary" name="submit">Редактировать</button>
						</div>
					</form>
					<? } ?>
				</div>
				<p class="text-center"><a href="index1.php" class="text-secondary">Вернуться назад</a></p>
				<!-- // Center Part -->
			</div>
			<!-- content block -->         
		</div>
	</div>
	<!-- // white-plate -->
	<?php include('./templates/_footer.php') ?>
</body>
</html>