
<section class="cart">
  <div class="overlay"></div>
  <div class="container">
    <?php if(!empty($_GET['order'])){?> <script>alert("Đơn hàng đã được gởi")</script> <?php } ?>
    <h4>
      <ion-icon name="cart-outline"></ion-icon>
      <span>Your Cart (<?= empty($_SESSION["Cart"])?0:count($_SESSION["Cart"])?>) </span>
    </h4>
    <?php if(!empty($_SESSION["Cart"])){ ?>

    <div class="list">
    <?php foreach($_SESSION["Cart"] as $x => $val) { ?>
      <div class="item">
      <img src="./public/img/dish/<?= $val['PICTURE']?>" alt="">
        <div class="info">
          <h5><?= $val['DISHNAME']?></h5>
          <input type="text" value="<?= $val['Quantity']?>" name="" disabled>
          <!-- <span class="icon">+</span> -->
        </div>
        <span class="price"> <?= $val['Quantity']*$val['PRICE'];?> VNĐ</span>
      </div>
    <?php } ?>    
    </div>
    <form action="index.php?controller=Cart&action=addCartDB" method="POST">
    <?php if(empty($_SESSION['iduser']) && empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])){
      ?> 
      <div style="margin:10px;">
        <label class="form-label">Họ và tên</label>
        <input type="text" name="fullname" class="form-control" placeholder="Nhập họ và tên">
      </div>
      <div>
        <label style="margin:5px;">Số điện thoại</label>
        <input type="text" style="margin:5px;" name="phone" placeholder="Nhập số điện thoại">
      </div>  <?php } 
      if(empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])){ ?>
        <button type="submit" class="btn">PAYMENT</btn>
        <?php } 
      } else { ?> <h4 class="item">Không có sản phẩm nào trong giỏ</h4>  <?php }  ?>
    </form>
  </div>

</section>