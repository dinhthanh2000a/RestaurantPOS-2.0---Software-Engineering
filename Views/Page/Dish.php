<script src="./public/js/Dish.js"></script>

<section class="dish" >
    <div class="overlay"></div>
        <div class="container">
            <div class="image">
            <img class="imgs" src="./public/img/dish/<?= $data["dish"]['PICTURE'] ?>">
            </div>
            <div class="info">
                <h3><?= $data["dish"]['DISHNAME'];?></h3>
                <p class="field"><span class="title">Giá:</span> <?= $data["dish"]['PRICE'];?> VNĐ </p>
                <p class="field"><span class="title">Mô Tả:</span> <br>
                <?= $data["dish"]['DESCRIP'];?>
                 </p>
            <button class="btn" name="<?= $data["dish"]['IDDISH']?>" onclick="Addtocart(name)">Thêm vào giỏ</button>
        </div>
    </div>
</section>