<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["page"]?></title>
    <link rel="shortcut icon" href="./public/img/System/logo.png" />
    <link type="text/css" rel="stylesheet" href="./public/css/style.css">

    <!-- <link type="text/javascript" rel="stylesheet" href="./public/js/jquery-3.6.0.js"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>
<body>
    <?php require "./Views/taskbar/header.php";?>

    <?php require "./Views/Page/".$data["page"].".php";?>


    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>
</html>