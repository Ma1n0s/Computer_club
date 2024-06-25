<!-- <?php
error_reporting(E_ERROR | E_PARSE);
?> -->
<form action="index1.php" method="get" class="search">
    <input name="searchField" type="text" placeholder="Поиск товара" value="<? echo $_GET['searchField'] ?>">
    <button class="btn"><i class="fa fa-search"></i></button>
</form>
<?
    if ($_GET['categoryId'] != 0) {
        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`category_id` = ".$_GET['categoryId']) -> fetchAll();
    } else if ($_GET['searchField'] != "") {
        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category` WHERE `products`.`title` like '%".$_GET['searchField']."%'") -> fetchAll();
    } else {
        $products = $pdo -> query("SELECT * FROM `products` INNER JOIN `category` ON `products`.`category_id` = `category`.`id_category`") -> fetchAll();
    }
?>