<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["page"]?></title>
    <script src="./public/js/jquery-3.6.0.js"></script>
</head>
<body>
<header>
<?php
    if(isset($_SESSION["iduser"])){
        ?>
        <form action="index.php?controller=login&action=logout" method="POST">
            <button name="logout">Đăng xuất</button>
        </form>
    <?php
    }
    if(!isset($_SESSION["iduser"])){
        ?>
    <form action="index.php?controller=login&action=logout" method="POST">
    <button name="logout">Đăng nhập</button>
    </form>
    <?php }
    ?>
</header>
    <?php require "./Views/taskbar/navbar.php";?>

    <?php require "./Views/Page/".$data["page"].".php";?>

    <?php require "./Views/taskbar/footer.php";?>

    <link type="text/css" rel="stylesheet" href="./public/css/style.css">

    <script src="./public/js/register.js"></script>
</body>
</html>