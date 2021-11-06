
    <div>
    <?php 
        foreach($data["menu"] as $x => $val) {
        ?><div class="cls"> <p><?= $val['IDDISH'];?></p>
            <p><?= $val['DISHNAME'];?></p>
            <p><?= $val['PRICE'];?></p>
            <p><?= $val['DESCRIP'];?></p>
            <p><?= $val['TYPEDISH'];?></p>
            <img class="imgs" src="./public/img/dish/<?= $val['PICTURE'] ?>">
            <br>
            <a href="index.php?controller=Cart&action=store&Id=<?= $val['IDDISH'];?>">chi tiết</a>
            <form action="index.php?controller=Cart&action=store" method="GET">
                <input type="button" name="Id" value="<?= $val['IDDISH'];?>" style="display:none">
                <input type="submit" value="Thêm vào giỏ">
            </form>
        
        </div><?php
        }
    ?>
    </div>

