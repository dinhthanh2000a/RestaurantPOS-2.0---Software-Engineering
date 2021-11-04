<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-system</title>
    <link type="text/css" rel="stylesheet" href="./public/css/login.css">
</head>
<div class="contentReg">
<h2>Đăng ký tài khoản</h2>
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
</div>
<div class="clear"></div>
  <button type="submit" name="btnregister" class="btn btn-primary">Submit</button><br>
</form>

<?php if (isset($data["result"])){ ?>
    <div class="notiregister"><?php 
    if($data["result"]=="true"){
        echo "Đăng ký thành công";
    }
    else{
        echo "Đăng ký thất bại";
    }
    ?></div>
<?php } ?>
</div>