<div>
    <p>        
        <?php 
        foreach($data["order"] as $x => $val) {
        ?><div class="cls"> <p>IDCART NÈ<?= $val['IDCART'];?></p>
            <p>QUANTITY NÈ<?= $val['QUANTITY'];?></p>
            <p>PRICE NÈ<?= $val['PRICE'];?></p>
            <p>TOTALPRICE NÈ<?= $val['TOTALPRICE'];?></p>
            <p>IDUSER NÈ<?= $val['IDUSER'];?></p>
            <p>IDDISH NÈ<?= $val['IDDISH'];?></p>
            <a href="index.php?controller=Employee&action=remove&Id=<?= $val['IDCART'];?>"
            onclick="return confirm('xác nhận')">XÓA</a>
        </div>
        <?php } ?>

       
    </p>
</div>