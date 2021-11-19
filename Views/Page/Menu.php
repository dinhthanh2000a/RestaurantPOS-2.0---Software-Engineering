<section id="drinks" class="menu drinks">
    <div class="container">
        <h2 class="heading">FOOD</h2>
        <ul class="list">
        <?php foreach($data["menu"] as $x => $val) { if($val['TYPEDISH'] == 'food'){?>
            <li class="item">
                <a href="index.php?controller=Dish&Id=<?= $val['IDDISH'];?>" class="itemLink"></a>                
                <img src="./public/img/dish/<?= $val['PICTURE'] ?>" alt=""></a> 
                <h4><?= $val['DISHNAME'];?></h4>
                <br>
                <label class="price"><?= $val['PRICE'];?></label> <span class="price">VNĐ </span>  
                <?php if(empty($_SESSION["idmanager"])) { ?>       
                <button class="btn" id="giam" name="<?= $val['IDDISH']?>" onclick="Addtocart(name)">Thêm vào giỏ</button>
                <?php } ?>
            </li>
        <?php }} ?>
        </ul>
        <hr>
        <h2 class="heading">DRINK</h2>
        <ul class="list">
        <?php foreach($data["menu"] as $x => $val) { if($val['TYPEDISH'] == 'drink'){?>
            <li class="item">
                <a href="index.php?controller=Dish&Id=<?= $val['IDDISH'];?>" class="itemLink"></a>                
                <img src="./public/img/dish/<?= $val['PICTURE'] ?>" alt=""></a> 
                <h4><?= $val['DISHNAME'];?></h4>
                <hr>
                <div class="buy">
                    <span class="price"><?= $val['PRICE'];?> VNĐ </span>
                    <a href="index.php?controller=Cart&action=store&Id=<?= $val['IDDISH']?>" class="btn">Add To Cart</a>
                </div>
            </li>
        <?php }} ?>
        </ul>
    </div>
</section>
