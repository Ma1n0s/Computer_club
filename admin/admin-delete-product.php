<?php
    require_once('../config.php');
	if (isset($_GET['del'])){
		$sql= "DELETE FROM `products` WHERE id_product=?";
		$del=$pdo -> prepare($sql);
		$del->execute(array($_GET['del']));
	}
	echo"<script>location.href='./admin.php'</script>";
?>