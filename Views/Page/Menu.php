<script src="./public/js/Dish.js"></script>

<section id="drinks" class="menu drinks">
    <div class="container">

        <!-- filter -->
        <div>
            <span class="">Bộ Lọc:</span>
            <select id="filter-dish" class="select-box" onchange="MenuChanged(this)">
                <option value="ALL">Tất cả</option>
                <?php $x=[]; foreach($data["menu"] as $key => $val) {
                    if(!array_key_exists($val['TYPEDISH'],$x)){?>
                    <option value="<?= $val['TYPEDISH'];?>"><?= ucfirst($val['TYPEDISH'])?></option>
                <?php  $x[$val['TYPEDISH']]=""; } } ?>
            </select>
            <!-- sort -->
            <span class="">Sắp Xếp :</span>
            <select class="select-box" id="sort-dish-name" onchange="SortName(this.value)">
                <option value="Ten" selected="selected">Tên</option>
                <option value="asc_sort">A -> Z</option>
                <option value="desc_sort">Z -> A</option>
            </select>
            <select class="select-box" id="sort-dish-price" onchange="SortPrice(this.value)">
                <option value="Gia">Giá</option>
                <option value="asc_sort">Thấp đến cao</option>
                <option value="desc_sort">Cao đến thấp</option>
            </select>
        </div>
        

        <ul class="list" id="menu-list">
        <?php foreach($data["menu"] as $x => $val) {?>
            <li class="item" name="<?= $val['TYPEDISH']?>">
                <a href="index.php?controller=Dish&Id=<?= $val['IDDISH'];?>" class="itemLink"></a>                
                <img src="./public/img/dish/<?= $val['PICTURE'] ?>" alt=""></a> 
                <h4><?= $val['DISHNAME'];?></h4>
                <br>
                <label class="price"><?= $val['PRICE'];?></label> <span class="price">VNĐ </span>  
                <?php if(empty($_SESSION["idmanager"])) { ?>       
                <button class="btn" id="giam" name="<?= $val['IDDISH']?>" onclick="Addtocart(name)">Thêm vào giỏ</button>
                <?php } ?>
            </li>
        <?php } ?>
        </ul>
    </div>
</section>
