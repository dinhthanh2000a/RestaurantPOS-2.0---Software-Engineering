

<section id ="tocook" class="orders">
    <div class="list" >
        <?php if(!empty($data["uniqueId"])){
        foreach($data["uniqueId"] as $x => $val) {  ?>
            <div class="item" style="background-color:white;">
                <h5>Order <?= $val['IDCART'];?></h5>
                <div class="info">
                    
                    <div class="field">
                        <span>Phone number</span>
                        <span><?= $val['SDT'];?></span>
                    </div>
                    <div class="field">
                        <span>Customer</span>
                        <span><?= $val['NAMECUST'];?></span>
                    </div>

                </div>
                <a href="index.php?controller=Payment&id=<?= $val['IDCART'];?>" class="btn">PAYMENT</a>
            </div>
        <?php
        }}

        
        else {?>  <h4 style="font-size:30px; margin:auto;" class="item">Hiện tại không có đơn đặt hàng nào</h4> <?php } ?>
    </div>
</section>