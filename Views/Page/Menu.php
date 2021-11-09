<script src="./public/js/Dish.js"></script>

<section id="drinks" class="menu drinks">
    <div class="container">

        <!-- filter -->
        <select id="filter-dish" onchange="MenuChanged(this)">
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
                    <button class="btn" id="giam" name="<?= $val['IDDISH']?>" onclick="Addtocart(name)">Add To Cart</button>
                </div>
            </li>
        <?php } ?>
        </ul>
        <hr>
    </div>
</section>
