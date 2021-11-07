
    <link type="text/css" rel="stylesheet" href="./public/css/login.css">
<section class="menu loginsssssssssss">
    <div>
    <form id="loginview" action="index.php?controller=login&action=login" method="POST">
        <h1>ĐĂNG NHẬP</h1>
        <?php if (isset($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label>Tên người dùng</label>
        <input type="text" name="uname" placeholder="Nhập tên người dùng">
        <br>
        <label>Mật khẩu</label>
        <input type="password" name = "password" placeholder="Nhập mật khẩu">
        <select name="type" id="type" class="typeuser">
                <option value="1">Khách Hàng</option>
                <option value="2">Nhân Viên</option>
                <option value="3">Quản Lý</option>
        </select>
        <br>
        <button type="submit" name="submitLogin">Đăng nhập</button><br>

        <button name="ExitLogin">Bỏ qua</button>
        <div >Bạn chưa có tài khoản?
        <button class="registersss" name="register">Đăng ký</button>
        </div style="margin:10px;">
        <br><?php if (isset($data["result"])){
        if($data["result"]=="true"){
            ?> <h4><?= "Đăng nhập thành công";?> </h4>
            <?php  } else{ ?>
            <h4 class="error"><?= "Tên hoặc mật khẩu không đúng";?></h4>
            <?php }}?>
    </form>
    
    </div>
</section>

