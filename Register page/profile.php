<?php
session_start();
if(!$_SESSION['user']){
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Authorization</title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
<body>
    
    <form>
        <img src="<?=$_SESSION['user']['avatar']?>" width="100" alt="">
        <h2><?=$_SESSION['user']['full_name']?></h2>
        <a href="#"><?=$_SESSION['user']['email']?></a>
        <a href="vendor/logout.php" class="logout">Log out</a>
    </form>
</body>
</html>