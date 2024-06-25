<?
	session_start();

	if ($_SESSION['admin']) {
		header("Location: index.php");
	}

	require_once('./config.php');
	include('./templates/_head.php');
	$current_user = $pdo -> query("SELECT id_user, user, password FROM users WHERE user = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") -> fetchAll();

	$user_cart = $pdo -> query("SELECT `carts`.`id_product`, `products`.`title`, `products`.`price`, `products`.`img`, COUNT(*) AS count_product FROM carts INNER JOIN products ON `carts`.`id_product` = `products`.`id_product` WHERE `carts`.`id_user` = ".$current_user[0]['id_user']." GROUP BY `carts`.`id_product` ORDER BY `carts`.`id_product` ASC") -> fetchAll();
?>

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
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<p class="header-text">Корзина</p>
						<div class="list" >
							<?
								$user_items = [];
								if (count($user_cart) == 0) { ?>
									<div class="empty__cart">
										<p class="empty__cart--title">Ваша корзина пуста</p>
										<p class="empty__cart--text">Выберите нужную бронь из каталога добавьте его в свой заказ</p>
										<a href="./index.php" class="btn btn-primary">В каталог</a>
									</div>
							<?
								} else {
									foreach ($user_cart as $item) {
										/*array_push($$user_items, $item['id_product']);*/
										include('./_product-cart-item.php');
										$sum += $item["price"] * $item["count_product"];
									}
									$items = json_encode($user_items);
							?>
							<div class="result">
								<p class="title text">Итого</p>
								<p class="result text"><? echo number_format($sum, 0, '', ' '); ?> руб</p>
								<a href="./order.php?userId=<? echo $current_user[0]['id_user']?>" class="btn">Заказать</a>
							</div>
							<? } ?>
						</div>
						<p class="text-center"><a href="index1.php" class="text-secondary">Вернуться назад</a></p>
					</div>
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

</php>
