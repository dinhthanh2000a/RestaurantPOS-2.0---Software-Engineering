<script src="./public/js/Cart.js"></script>

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
      <div class="item" id="<?= $val['IDDISH']."DISH"?>">
        <img src="./public/img/dish/<?= $val['PICTURE']?>" alt="">
        <div>
          <h2 style="width:100px;"><?= $val['DISHNAME']?></h2>
          <div class="info">
            <button class="icon" id="giam" name="<?= $val['IDDISH']?>" onclick="update(name,value)" value="-">-</button>
            <input type="text" style="width:45px;" value="<?= $val['Quantity']?>" id="<?= $val['IDDISH']?>" disabled>
            <button class="icon" id="tang" name="<?= $val['IDDISH']?>" onclick="update(name,value)" value="+">+</button>
          </div>
        
        <span class="price"> <span id="<?= $val['IDDISH']."Price"?>"><?= $val['Quantity']*$val['PRICE'];?></span> VNĐ</span>
        <button class="btn deletebtn" name="<?= $val['IDDISH']?>" onclick="deletedish(name)">Xóa</button></div>
      </div>
    <?php } ?>    
    </div>
    <form action="index.php?controller=Cart&action=addCartDB" method="POST">
    <?php if(empty($_SESSION['iduser']) && empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])){
      ?> 
      <div style="margin:10px;">
        <label class="form-label">Họ và tên</label>
        <input type="text" name="fullname" class="form-control" placeholder="Nhập họ và tên" id="information1">
      </div>
      <div style="margin:10px;">
        <label class="form-label">Số điện thoại</label>
        <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại" id="information2">
      </div>
      <div style="margin:10px;">
        <label >Số điện thoại</label>
        <input type="text" name="phone" placeholder="Nhập số điện thoại">
      </div>  <?php } 
      if(empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])){ ?>
        <div id="selectListed">
          <br>
          <label style="margin:10px;">Chọn bàn</label>
          <select id="selectList" class="select-box">
            <option selected>Mang về</option>
            <?php for($i=1;$i < 20;$i++){ ?>
            <option ><?= $i; ?></option>
            <?php } ?>
          </select>
        </div>
        <label style="margin-left:10px;">Tổng tiền: </label><label class="price" id="totalprice"></label><label class="price">VNĐ</label>
        <input type="button" class="btn" id="ordersubmit" onclick="submitcart()" value="Order">
        <?php }
      } else { ?> <h4 class="item">Không có sản phẩm nào trong giỏ</h4>  <?php }  ?>
    </form>
  </div>

</section>
