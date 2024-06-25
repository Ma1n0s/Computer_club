<?php session_start(); ?>
<?php require_once('./config.php'); ?>
<?php include('./templates/_head.php'); ?>
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
				<?php include('./templates/_aside.php'); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">
					<? if(isset($_GET['userId'])) {
						$sql = "SELECT * FROM `users` WHERE id_user=?";
						$rez = $pdo->prepare($sql);
						$rez->execute(array("$_GET[userId]"));
						$current_user = $rez -> fetch();
					?>
					<div class="title-1">Сделать бронь</div>
					<form method="GET">
						<input type="hidden" name="ID" value="<?php echo $current_user['id_user']?>">
						<input type="hidden" name="idprodcut" value="<?php echo $user_cart['id_product']?>">
						<div class="form-group">
							<input type="text" class="form-control"  placeholder="Имя" value="<?php echo $current_user['Name']?>" name="name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Имя пользователя" value="<?php echo $current_user['Surname']?>" name="Surname">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Номер телефона" value="<?php echo $current_user['Telephone']?>" name="phone">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>

						<? 
						$user_cart = $pdo -> query("SELECT * FROM carts INNER JOIN products ON `carts`.`id_product` = `products`.`id_product` WHERE id_user = ".$current_user['id_user']."") -> fetchAll();
						foreach ($user_cart as $item) { ?>
							<div class="item" id="<? echo $user_cart['id_cart_product'] ?>">
								<input type="hidden" value="<?php echo $item['id_product']?>" name="idproduct">
								<img src="./img/products/<? echo $item['img'] ?>" class="cart-img" style="width:200px; height:200px;">
								<a href="./product-page.php?productId=<? echo $item['id_product'] ?>" class="title text"><? echo $item['title'] ?></a>
							</div>
						<?
						 $prod = $item['id_product'];
						    $pdo -> query("UPDATE `products` SET `sale`='1', `new`='0' WHERE `id_product` = $prod") -> fetch();
						}
						?>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Оформить заказ</button>
						</div>
						<!-- <button class="zaka" onclick="confirm()">Оформить</button> -->
					</form>
					<? } ?>
					<?php 
						if (isset($_GET['submit'])) {
							$pdo -> prepare("INSERT INTO `order` SET `id_user` = ?, `id_product`=?,`Name` = ?, `Surname` = ?, `Telephone` = ?, `Email` = ?") -> execute(array($_GET['ID'], $_GET['idproduct'],$_GET['name'], $_GET['Surname'], $_GET['phone'], $_GET['email']));
							include('./delete-product-cart.php');
							header('Location:http://php2/index1.php');
							echo "<script>alert('Ваш заказ успешно сформирован!');</script>";
						}
					?>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
	<script>
		let idUser = <? echo $_SESSION['id_user'] ?>;
	</script>
	<script src="./js/script.js"></script>
</body>

</html>
