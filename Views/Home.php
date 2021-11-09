<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["page"]?></title>
    <link rel="shortcut icon" href="./public/img/System/logo.png" />
    <link type="text/css" rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>
<body>
    <?php require "./Views/taskbar/header.php";?>

    <?php require "./Views/Page/".$data["page"].".php";?>
</body>
</html>