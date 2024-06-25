<?php
	require_once("./config.php");
    if(isset($_POST['submit'])){
        $sql = "UPDATE users SET  user = ?, password = ?, role = 'user', Name = ?, Surname = ?, Telephone = ? WHERE id_user = ?";
        $edit = $pdo -> prepare($sql);
        $edit -> execute(array($_POST['login'], md5($_POST['password']), $_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['ID']));
        echo '<script type="text/javascript">location.href="./index.php"</script>';
    }
?>