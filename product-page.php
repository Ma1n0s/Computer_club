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
			<?php $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE id_product = ".$_GET['productId']) -> fetchAll(); ?>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php include('./templates/_aside.php'); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<? foreach ($products as $product) { ?>
					<div class="col-md-9">
						<div class="product-title"><? echo $product['title']; ?></div>
						<div class="row">	
							<div class="col-5">
								<img class="image" src="img/products/<?php echo $product['img']; ?>" alt="">
							</div>
							<div class="col-7">
								<div class="product-price"><?php echo number_format($product['price'], 0, '', ' '); ?> руб.</div>
								<div class="product-desc">
									<?php echo $product['description']; ?>
								</div>
							</div>
						</div>

					</div>
				<? } ?>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>

	<script src="./js/script.js"></script>
</body>

</html>
