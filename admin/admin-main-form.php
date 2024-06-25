<div class="col-lg-12 item d-flex justify-content-between align-items-center">
	<img src="../img/products/<? echo $product['img'] ?>" style="width: 100px; height:100px;">
	<a href="" class="title text admin-product-title"><? echo $product['title'] ?></a>
	<div class="price text"><? echo number_format($product['price'], 0, '', ' '); ?> руб.</div>
	<a href="./admin-edit-product.php?ed=<? echo $product['id_product']?>" class="btn btn-primary">Редактировать</a>
	<a href="./admin-delete-product.php?del=<? echo $product['id_product']; ?>" class="btn btn-primary">Удалить</a>
	<hr>
</div>
