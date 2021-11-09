<script src="./public/js/Dish.js"></script>

<section class="dish" >
    <div class="overlay"></div>
        <div class="container">
            <div class="image">
            <img class="imgs" src="./public/img/dish/<?= $data["dish"]['PICTURE'] ?>">
            </div>
            <div class="info">
                <h3><?= $data["dish"]['DISHNAME'];?></h3>
                <p class="field"><span class="title">Price:</span> <?= $data["dish"]['PRICE'];?> VNĐ </p>
                <p class="field"><span class="title">Description:</span> <br>
                <?= $data["dish"]['DESCRIP'];?>
                 </p>
            <button class="btn" name="<?= $data["dish"]['IDDISH']?>" onclick="Addtocart(name)">Add To Cart</button>
        </div>
    </div>
</section>