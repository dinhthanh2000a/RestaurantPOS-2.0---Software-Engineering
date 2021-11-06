<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-system</title>
    <link type="text/css" rel="stylesheet" href="./public/css/login.css">
</head>
<body>
    <div>
    <form action="index.php?controller=login&action=login" method="POST">
        <h2>ĐĂNG NHẬP</h2>
        <?php if (isset($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label>Tên người dùng</label>
        <input type="text" name="uname" placeholder="Nhập tên người dùng">
        <br>
        <label>Mật khẩu</label>
        <input type="password" name = "password" placeholder="Nhập mật khẩu">
        <select name="type" id="type">
                <option value="1">Khách Hàng</option>
                <option value="2">Nhân Viên</option>
                <option value="3">Quản Lý</option>
        </select>
        <br>
        <button name="ExitLogin">Bỏ qua</button>
        <button type="submit" name="submitLogin">Đăng nhập</button><br>
        <div>Bạn chưa có tài khoản?
        <button name="register">Đăng ký</button>
        </div>
        <br>
    </form>
    <?php if (isset($data["result"])){
        if($data["result"]=="true"){
            ?>
            <h4>
                <?php echo "Đăng nhập thành công";

                ?>
            </h4>
            <?php
        }
        else{
            ?>
            <h4>
                <?php echo "Tên hoặc mật khẩu không đúng";
                ?>
            </h4>
            <?php
        }
    }
    ?>
    </div>
</body>
</html>

