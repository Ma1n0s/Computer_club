<div class="col-sm-6 col-lg-4 product_card" data-price="<?php echo $product['price'];?>" data-category="<? echo $product['name']; ?>">
	<div class="card mb-4">
		<div class="card-top">
			<div class="card-top__cat"><? echo $product['name']; ?></div>
			<? if ($product['sale']) { ?>
			<div class="card-top__sale">Занято</div>
			<? } 
			if ($product['new']) {
			?>
			<div class="card-top__new">Свободно</div>
			<? } ?>
		</div>
		<div class="product-img">
			<img class="product-image" src="./img/products/<? echo $product['img']; ?>" >
		</div>
		<div class="card-body">
			<h4 class="item-title">
				<a href="product-page.php?productId=<? echo $product['id_product']; ?>" class="search__title">
					<? echo $product['title'] ?>
				</a>
			</h4>
			<div class="card-btn">
				<div class="card-btn__price">
					<? echo $product['price']; ?> руб.
				</div>
				<? if ($_SESSION['authorize'] and $product['new']) { ?>
					<div class="card-btn__btn">
						<p class="insert-btn" id="<? echo $product['id_product']; ?>">Сделать бронь</p>
					</div>
				<? } ?>
			</div>
		</div>
	</div>
</div>