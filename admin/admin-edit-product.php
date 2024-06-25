<?php
    require_once('../config.php');
    error_reporting(E_ERROR | E_PARSE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <? include('../templates/_head.php') ?>
</head>
<body>
    <!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include('../templates/_header.php'); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
                <? if(isset($_GET['ed'])){
                    $sql = "SELECT * FROM products WHERE id_product = ?";
                    $result = $pdo->prepare($sql);
                    $result -> execute(array($_GET['ed']));
                    $products = $result -> fetch();
                    
                ?>
                <div class="col-lg-12">
                <form enctype="multipart/form-data" action="" method="GET">
                    <h2 class="add_film--title">Редактирование данных</h2><br>
                    <input type="hidden" name='ID' value="<? echo $products['id_product']; ?>">
                    <div class="form-group d-flex flex-column">
                        <label for="product-title">Название продукта</label>
                        <input type="text" value="<? echo $products['title']; ?>" name="product-title" class="">
                    </div>
                    <hr>
                    <div class="form-group d-flex flex-column">
                        <label for="product-price">Стоимость</label>
                        <input type="text" value="<? echo $products['price']; ?>" name="product-price">
                    </div>
                    <hr>
                    <div class="form-group d-flex flex-column">
                        <label for="product-description">Описание</label>
                        <textarea name="product-description" id="" cols="100" rows="5"><?php echo $products['description'] ?></textarea>
                    </div>
                    <hr>
                    <div class="form-group pt-3">
                            <label for="exampleFormControlFile1">Фото:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="sale">
                            <label class="form-check-label" for="inlineCheckbox1">занят</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="new">
                            <label class="form-check-label" for="inlineCheckbox2">Свободный</label>
                        </div>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Отредактировать" name="edit-btn">
                </form>
                </div>
                <? } ?>
                <? if(isset($_GET['edit-btn'])){
                   $file_name = $_FILES['img']['name'];
                   $directory = "../img/products/";
                   // $image_type = array('jpg', 'png');
           
                   $file_tempname = $_FILES['img']['tmp_name'];
                   $path = $directory.$file_name;
           
                   move_uploaded_file($file_tempname, $path);
                    $sql = 'UPDATE `products` SET `title` = ?, `price` = ?, `description` = ?, `img` = ?, `sale` = ?, `new` = ?  WHERE `id_product`=?';
        $sql = $pdo -> prepare($sql);
        $sql = $sql -> execute(array($_GET['product-title'], $_GET['product-price'], $_GET['product-description'], $_GET['img'], $_GET['sale'], $_GET['new'],$_GET['ID']));
                    echo "<script> window.location.href = 'admin.php'</script>";
                }?>
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('../templates/_footer.php'); ?>
</body>
</html>