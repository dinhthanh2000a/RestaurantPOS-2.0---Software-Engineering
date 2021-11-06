
    <section id ="tocook" class="orders active">
        <div class="list">
            
        <div>
        <?php 
        foreach($data["uniqueId"] as $x => $val) {
        ?>
            <div class="item">
                <h5>Order <?= $val['IDCART'];?></h5>
                <div class="info">
                    <div class="field">
                        <span>Time</span>
                        <span>15:13</span>
                    </div>
                    <div class="field">
                        <span>Phone number</span>
                        <span><?= $val['SDT'];?></span>
                    </div>
                    <div class="field">
                        <span>Customer</span>
                        <span><?= $val['NAMECUST'];?></span>
                    </div>
                </div>
                <a href="/Project/index.php?controller=Payment&action=showPayment&id=<?= $val['IDCART'];?>" class="btn">PAYMENT</a>
                </div>
        </div>
        <?php
        }
        ?>
    </div>                              
        </div>
    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</body>
</html>