<?
	session_start();
	require_once('./config.php');
	include('./templates/_head.php');
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
				<?php include('./templates/_aside.php'); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-10 col-lg-10">
					<div class="row">
						<div class="col-lg-12 d-flex">			
							<div class="col-lg-12">
								<?	include("./templates/_search.php"); ?>
							</div>					
						</div>
					</div>
					<div class="row">
							<div class="filter__btns" style="margin: 0 0 20px 20px;">
								<button class="price__filer--btn btn btn-primary" style="height:50px;">Сортировка по цене</button>
								<!-- <button class="category__filter--btn btn btn-primary" style="height:50px;">Сортировка по категориям</button> -->
							</div>
							<div class="price__filter hide">
								<button id="price-notsort" class="btn btn-primary" style="width: 250px; margin-bottom:20px;">Без сортировки</button>
								<button id="price-asc" class="btn btn-primary" style="width: 250px; margin-right: 30px; margin-bottom:20px;">Цена, по возрастанию</button>
								<button id="price-desc" class="btn btn-primary" style="width: 250px;">Цена, по убыванию</button>
							</div>
							<!-- <div class="category__filer hide">
								<button class="btn btn-primary" data-filter="All" style="margin-bottom:20px;">Все товары</button>
								<button class="btn btn-primary" data-filter="Телефон" style="margin-bottom:20px;">обычные места</button>
								<button class="btn btn-primary" data-filter="Компьютер" style="margin-bottom:20px;">vip места</button>		
							</div> -->
							<div class="row">
								<div class="col-lg-12 product__cards d-flex" style="flex-wrap: wrap;">
									<?
										foreach ($products as $product) {
											include("./_product-item.php");
										}
									?>
								</div>
								<p class="text-center"><a href="index.php" class="text-secondary">Вернуться назад</a></p>
							</div>
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
	let idUser = <? if ($_SESSION['authorize']) { echo $_SESSION['id_user']; } else { echo 0; } ?>;
	$(".alert").toggle();
</script>
<script src="./js/script.js"></script>
</body>