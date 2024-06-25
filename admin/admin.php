<?php
	session_start();
	if (!$_SESSION['admin']) {
		header("Location: ../index1.php");
	}
	if (!$_SESSION['authorize']) {
		header("Location: ../login.php");
	}

	require_once('../config.php');
	include('../templates/_head.php');
	$products = $pdo -> query("SELECT * FROM products") -> fetchAll();
?>

<body>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include('../templates/_header.php'); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row justify-content-end">
				<div class="col-lg-3 justify-content-end">
					<a href="./admin-insert-product-form.php" class="btn btn-primary" style="margin-bottom:30px;">Добавить товар</a>
				</div>
			</div>
			<? foreach ($products as $product) {
					include('./admin-main-form.php');
				} ?>
			<!-- content block -->
		</div>
		<p class="text-center"><a href="http://php2/index1.php" class="text-secondary">Вернуться назад</a></p>
	</div>
	<!-- // white-plate -->

	<?php include('../templates/_footer.php'); ?>

	<script src="./js/script.js"></script>
	<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>

</html>
