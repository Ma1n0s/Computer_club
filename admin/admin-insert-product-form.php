<?php
	session_start();
	if (!$_SESSION['admin']) {
		header("Location: ../index.php");
	}
	if (!$_SESSION['authorize']) {
		header("Location: ../login.php");
	}

	require_once("../config.php");
	include('../templates/_head.php');
?>
<div class="line-between"></div>
<!-- content white-plate  -->
	<div class="white-plate">
		<div class="container-fluid">
            <!-- header -->
            <?php include('../templates/_header.php'); ?>
            <!-- // header -->
            <div class="row">
                <div class="col-12">
                    <div class="title-1">Добавить товар</div>

                    <form action="./admin-insert-product.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Название" name="title">
                        </div>
                        <?php $categories = $pdo -> query("SELECT * FROM category") -> fetchAll(); ?>
                        <div class="form-group">
                            <select class="form-control" name="type">
                                <option hidden>Выберите тип товара</option>
                                <? foreach ($categories as $category) { ?>
                                    <option value="<? echo $category['id_category']; ?>"><? echo $category['name']; ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Цена" name="price">
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="sale">
                            <label class="form-check-label" for="inlineCheckbox1">занятой</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="new">
                            <label class="form-check-label" for="inlineCheckbox2">Свободный</label>
                        </div>

                        <div class="form-group pt-3">
                            <label for="exampleFormControlFile1">Фото:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Описание:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Добавить</button>
                            <a href="../index.php" class="back">Вернуться на главную</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- // content -->
<!-- footer -->
<?php include('../templates/_footer.php'); ?>
<!-- // footer -->
<script src="./js/script.js"></script>
</body>

</html>