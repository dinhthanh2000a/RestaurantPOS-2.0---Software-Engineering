<section class="dish">
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
            <div class="field quantity">
                    <!-- <span class="title">Quantity:</span>
                    <span class="icon">-</span>
                    <input type="number" value="1">
                    <span class="icon">+</span> -->
                    <?php if(!empty($_SESSION["idmanager"])) { ?>
                        <form action="index.php?controller=manage&action=editDish&Id=<?= $data["dish"]["IDDISH"];?>" method="POST">
                            <button class="btn">Sửa</button>
                        </form>
                        <a href="index.php?controller=Dish&action=removeDish&Id=<?= $data["dish"]["IDDISH"];?>" class="icon">x</a>
                    <?php } ?>
            </div>
            <a href="index.php?controller=Cart&action=store&Id=<?= $data["dish"]['IDDISH'];?>" class="btn">Add To Cart</a>
            <button class="btn">ADD TO CART</button>
        </div>
    </div>
</section>