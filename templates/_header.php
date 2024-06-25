<?php
error_reporting(E_ERROR | E_PARSE);
?>
<div class="header">
	<div class="row">
		<div class="col-sm-6">
			<a href="../index.php" class="site-logo">
				<span>Игро</span>Фан
			</a>
		</div>
		<div class="col-sm-6">
			<div class="admin-link">
				<?php if (!$_SESSION['authorize']) { ?>
					<a href="./login.php">
						<img width="38" src="img/icons/padlock.svg" alt="">
					</a>
				<? }
				if ($_SESSION['authorize'] && $_SESSION['admin']) { ?>
					<?php 	$current_user = $pdo -> query("SELECT * FROM users WHERE user = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") -> fetchAll();?>
					<a href="../admin/admin.php?userId=<? echo $current_user[0]['id_user']?>" class="btn btn-primary"><? echo $current_user[0]['user'];?></a>
					<!-- <a href="./adminka/admin.php" class="btn btn-primary">
						Админка
					</a> -->
				<? }
				/*if(isset($_POST['btn']) and !empty($_POST['admin.php']))
				{
				    $mytext = $_POST['admin.php'];
				    file_put_contents('./admin.php', PHP_EOL . $mytext, FILE_APPEND);
				}*/
				if ($_SESSION['authorize'] && !$_SESSION['admin']) { ?>
					<?php 	$current_user = $pdo -> query("SELECT * FROM users WHERE user = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") -> fetchAll();?>
					<a href="../personal-area.php?userId=<? echo $current_user[0]['id_user']?>" class="btn btn-primary"><? echo $current_user[0]['user'];?></a>
					<a class="btn btn-primary cart" href="../cart.php">бронь</a>
				<? }
				if ($_SESSION['authorize']) { ?>
					<a href="../check.php?logout=1">
						<img width="38" src="../img/icons/logout.svg" alt="">
					</a>
				<? } ?>
			</div>
		</div>
	</div>
</div>