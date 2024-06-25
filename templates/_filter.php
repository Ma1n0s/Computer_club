<?php $category = $pdo -> query("SELECT * FROM category") -> fetchAll(); ?>
<div class="row">
    <div class="col-lg-3">
        <form action="index.php" method="POST">
            <div class="form-group" style="width:200px;">
            
                <select name="category-filter" id="" class="form-control category__select" method="POST">
                    <? foreach ($category as $item) { ?>
                        <option value="<? echo $item['id_category']; ?>"><button name="category_name"><? echo $item['name'] ?></button></option>
                    <? } ?>
                </select> 
                
                <?php 
                    if($_POST['category_name'] = 0) {
                        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category`") -> fetchAll();
                    }
                    if($_POST['category_name'] = "Телефоны") {
                        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`category_id` = $_POST['id_category']") -> fetchAll();
                    } else if($_POST['category_name'] = "Компьютер") {
                        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`category_id` = $_POST['id_category']") -> fetchAll();
                    } else if($_POST['category_name'] = "Планшет") {
                        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`category_id` = $_POST['id_category']") -> fetchAll();
                    } else if($_POST['category_name'] = "Ноутбук") {
                        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`category_id` = $_POST['id_category']") -> fetchAll();
                    }
                ?>
            </div>
        </form>
    </div>
    <div class="col-lg-3">
        <div class="form-group price__range">
            <div  id="rangeValue">1</div>
            <input type="range" class="form-range" id="priceRange" min="0" max="1000000" step="100" value="0">
        </div>
    </div>
</div>


