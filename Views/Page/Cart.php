
<section class="cart">
  <div class="overlay"></div>
  <div class="container">
    <h4>
      <ion-icon name="cart-outline"></ion-icon>
      <span>Your Cart (<?= empty($_SESSION["Cart"])?0:count($_SESSION["Cart"])?>)</span>
    </h4>
    <?php if(!empty($_SESSION["Cart"])){ ?>

    <div class="list">
    <?php foreach($_SESSION["Cart"] as $x => $val) { ?>
      <div class="item">
      <img src="./public/img/dish/<?= $val['PICTURE']?>" alt="">
        <div class="info">
          <h5><?= $val['DISHNAME']?></h5>
          <span class="icon">-</span>
          <input type="text" value="<?= $val['Quantity']?>" disabled>
          <span class="icon">+</span>
        </div>
        <span class="price"> <?= $val['Quantity']*$val['PRICE'];?> VNĐ</span>
      </div>
    <?php } ?>    
    </div>
    <a href="index.php?controller=Cart&action=addCartDB" class="btn">PAYMENT</a>
    <?php }  else { ?> <h4 class="item">Không có sản phẩm nào trong giỏ</h4>  <?php }  ?>

  </div>
</section>