<link type="text/css" rel="stylesheet" href="./public/css/register.css">

<section class="menuss">
  <form class="formaddemp" action="index.php?controller=register&action=EmployeeRegister" method="POST">
    <p style="font-size:30px;margin:10px;padding:20px;">Đăng ký tài khoản nhân viên</p>

    <div class="mb-3">
      <label class="form-label">Tên đăng nhập</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên dăng nhập">
    </div>

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
    
    <div class="mb-3">
      <label class="form-label">Địa chỉ</label>
      <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
    </div>

    <div class="mb-3">
      <label class="form-label">Ngày sinh</label>
      <input type="date" name="dob" class="form-control" placeholder="Nhập ngày sinh">
    </div>
    <div class="clear"></div>
    <button type="submit" name="btnregister">Đăng ký</button>
    <br><br>

    <?php if (isset($data["result"])){ ?>
      <div class="notiregister"><?php 
      if($data["result"]=="true"){
      ?> <h4><?= "Đăng ký thành công";?> </h4><?php
      } else{
      ?><h4 class="error"><?= "Tên hoặc mật khẩu không đúng";?></h4> <?php 
      }
      ?></div>
    <?php } ?>

</form>
</section>
