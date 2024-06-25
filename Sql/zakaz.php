<?php
    session_start();
    if(isset($_SESSION['ClientId'])){
        require_once('connect.php');

        $sql6 = sql("SELECT MAX(`id_order`) AS 'mid' FROM `orders`", []);
        $orderid = $sql6[0]['mid'] + 1;
        sql("INSERT INTO `orders` (`id_order`,`id_client`,`date`) VALUES (?,?,NOW())", [$orderid, $_SESSION['ClientId']]);

        $sql6 = sql("SELECT * FROM `korzina` WHERE `id_client` = ?",[$_SESSION['ClientId']]);
        foreach($sql6 as $mas1){
            sql("INSERT INTO `tovarcontent` (`id_order`, `id_tovar`, `Count`) VALUES (?,?,?)", [$orderid, $mas1['id_tovar'],$mas1['Count']]);
            sql("UPDATE `tovar` SET `status` = 'недоступно' WHERE `id_tovar` = ?", [$mas1['id_tovar']]);
            sql("DELETE FROM `korzina` WHERE `Id_kor` = ?", [$mas1['Id_kor']]);
        }
    }
?>