<div>
    <div class="cls"> <p><?= $data["dish"]['IDDISH'];?></p>
            <p><?= $data["dish"]['DISHNAME'];?></p>
            <p><?= $data["dish"]['PRICE'];?></p>
            <p><?= $data["dish"]['DESCRIP'];?></p>
            <p><?= $data["dish"]['TYPEDISH'];?></p>
            <img class="imgs" src="./public/img/dish/<?= $data["dish"]['PICTURE'] ?>">
            <br>
            <a href="index.php">về menu</a>
        </div>
</div>