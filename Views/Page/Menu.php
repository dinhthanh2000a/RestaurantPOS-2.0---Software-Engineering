<section id="drinks" class="menu drinks">
    <div class="container">

        <!-- filter -->
        <select id="filter-dish" class="select-box" onchange="MenuChanged(this)">
            <option>ALL</option>
            <?php $x=[]; foreach($data["menu"] as $key => $val) {
                if(!array_key_exists($val['TYPEDISH'],$x)){?>
                <option value="<?= $val['TYPEDISH'];?>"><?= ucfirst($val['TYPEDISH'])?></option>
            <?php  $x[$val['TYPEDISH']]=""; } } ?>
        </select>


        <ul class="list" id="menu-list">
        <?php foreach($data["menu"] as $x => $val) {?>
            <li class="item" name="<?= $val['TYPEDISH']?>">
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
