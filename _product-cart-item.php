<!-- <?php
error_reporting(E_ERROR | E_PARSE);
?> -->
<div class="item" id="<? echo $item['id_cart_product'] ?>">
	<img src="./img/products/<? echo $item['img'] ?>" class="cart-img">
	<a href="./product-page.php?productId=<? echo $item['id_product'] ?>" name="idproduct" class="title text"><? echo $item['title']?></a>
	<div class="counter">
		<i id="<? echo $item['id_product'] ?>" class="fa fa-plus"></i>
		<p class="count text"><? echo $item['count_product'] ?></p>
		<i id="<? echo $item['id_product'] ?>" class="fa fa-minus"></i>
	</div>
	<p class="price text"><? echo number_format($item['price'], 0, '', ' '); ?> руб.</p>
	<button id="<? echo $item['id_product'] ?>" class="btn btn-primary delete-card-btn" style="margin-left: 10px;">Удалить бронь</button>
</div>