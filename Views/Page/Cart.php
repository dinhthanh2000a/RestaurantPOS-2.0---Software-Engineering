
<section class="cart">
  <div class="overlay"></div>
  <div class="container">
    <?php if(!empty($_GET['order'])){?> <script>alert("Đơn hàng đã được gởi")</script> <?php } ?>
    <h4>
      <ion-icon name="cart-outline"></ion-icon>
      <span>Giỏ hàng của bạn (<span name="dish-in-cart"><?= empty($_SESSION["Cart"])?0:count($_SESSION["Cart"])?></span>) </span>
    </h4>
    <?php if(!empty($_SESSION["Cart"])){ ?>

    <div class="list">
    <?php foreach($_SESSION["Cart"] as $x => $val) { ?>
      <div class="item">
      <img src="./public/img/dish/<?= $val['PICTURE']?>" alt="">
        <div class="info">
          <h5><?= $val['DISHNAME']?></h5>
          <span class="icon">-</span>
          <input type="text" value="<?= $val['Quantity']?>" name="" disabled>
          <span class="icon">+</span>
        </div>
        <span class="price"> <?= $val['Quantity']*$val['PRICE'];?> VNĐ</span>
        <button class="btn" style="width:80px;height:50px;">Xóa</button>
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
      <div style="margin:10px;">
        <label >Số điện thoại</label>
        <input type="text" name="phone" placeholder="Nhập số điện thoại">
      </div>  <?php } 
      if(empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])){ ?>
        <div id="selectListed">
          <br>
          <label style="margin:5px;">Chọn bàn</label>
          <select id="selectList" class="select-box">
            <option selected>Mang về</option>
            <?php for($i=1;$i < 20;$i++){ ?>
            <option ><?= $i; ?></option>
            <?php } ?>
          </select>
        </div>
        <input type="button" class="btn" id="ordersubmit" onclick="submitcart()" value="Order">
        <?php }
      } else { ?> <h4 class="item">Không có sản phẩm nào trong giỏ</h4>  <?php }  ?>
    </form>
  </div>

</section>