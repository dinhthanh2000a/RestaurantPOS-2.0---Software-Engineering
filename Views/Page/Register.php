<link type="text/css" rel="stylesheet" href="./public/css/login.css">
<section class="menu loginsssssssssss">
  <div >
    <h1>Đăng ký tài khoản</h1>
    <form action="index.php?controller=register&action=userregister" method="POST">
    <div class="info main">
      <div class="mb-3">
        <label class="form-label">Tên đăng nhập</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên dăng nhập">
      </div>
      <div id="messageUn"></div>
      <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
    </div>
    <div class="mb-3">
      <label class="form-label">Họ và tên</label>
      <input type="text" name="fullname" class="form-control" placeholder="Nhập họ và tên">
    </div>
    <div class="mb-3">
      <label class="form-label">Số điện thoại</label>
      <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Nhập email">
    </div>
  </div>
  <div class="clear"></div>
    <button class="registersss" type="submit" name="btnregister">Đăng ký</button><br>

<?php if (isset($data["result"])){ ?>
    <div class="notiregister"><?php 
    if($data["result"]=="true"){
      ?> <h4><?= "Đăng nhập thành công";?> </h4><?php
    }
    else{
      ?><h4 class="error"><?= "Tên hoặc mật khẩu không đúng";?></h4> <?php 
    }
    ?></div>
    <?php }?>

  </form>
</div>
</section>
