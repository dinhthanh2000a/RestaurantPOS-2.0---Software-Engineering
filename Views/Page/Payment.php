<link type="text/css" rel="stylesheet" href="./public/css/pay.css">

<section class="menu ">
    <div class="paymentss">
    <table style="margin:0 auto;" >
        <thead>
            <tr>
                <th style="font-weight:bold;font-size:30px;">POS restaurant</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td style="font-weight:bold;">Customer: </td>
            <td><?= $data["receipt"][0]['NAMECUST'] ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Phone :   </td>
                <td><?= $data["receipt"][0]['SDT'] ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Receipt :   </td>
                <td><?= $data["receipt"][0]['IDCART'] ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Receipt </td>
            </tr>
            <tr>
                <th style="font-weight:bold;">Product</th>
                <th style="font-weight:bold;">Quantity</th>
                <th class="text-center" style="font-weight:bold;">Price</th>
                <th class="text-center" style="font-weight:bold;">Total</th>
            </tr>
            <?php
            $sum =0 ;             
            foreach ($data["receipt"] as $x => $val) {?>
            <tr>
                <td class="col-md-9"><em><?= $val['DISHNAME'];?></em></h4></td>
                <td class="col-md-1" style="text-align: center"> <?= $val['QUANTITY'];?> </td>                                       
                <td class="col-md-1 text-center"><?= $val['PRICE'];?></td>                                       
                <td class="col-md-1 text-center"><?= $val['TOTALPRICE'];?></td>               
            </tr>
                                    
            <?php $sum =$sum +  $val['TOTALPRICE'];  }  ?>
            <tr>        
                <td></td>           <td></td>        
                <td class="text-right"><h4><strong>Total: </strong></h4></td>                                  
                <td class="text-center text-danger"><h4 id = "total"></h4></td>
                <script type= 'text/javascript'>
                    var x = "<?php echo "$sum"?>";                 
                    document.getElementById('total').innerHTML = x;
                </script>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn" onclick="window.location.href='#popup4'">
                        CASH   <span class="glyphicon glyphicon-chevron-right"></span></button></td>
                <td>
                    <button type="button" class="btn" onclick="window.location.href='#popup5'">
                        ONLINE   <span class="glyphicon glyphicon-chevron-right"></span></button></td>
            </tr>
        </tbody>
    </table>
    </div>
</section>

    <div id="popup4" class="overlay">
        <div class="login-box">
            <h2> Payment Success </h2>
            <form>
                <div class="user-box">
                    <label class="thanh">Thank you for using our service! See you soon.</label>
                </div>
                
                <div class="btn btn-success btn-lg btn-block">  
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="/Project/index.php?controller=Payment&action=addPayment&id=<?= $data["receipt"][0]['IDCART'];?>" class="btn">DONE</a>
                </div>
            </form>
        </div>
    </div>

    <div id="popup5" class="overlay">
            <div class="login-box">
                <h2> Payment Success </h2>
                <form>
                    <div class="user-box">
                        <label id="main" style="width: 320px; height: 400px;">
                               <img src="/Project/public/img/momo.png" height="400" />
                        </label><br>
                        <label>Thank you for using our service! See you soon.</label>
                          
                    </div>
                    <div class="btn btn-success btn-lg btn-block">  
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="/Project/index.php?controller=Payment&action=addPayment&id=<?= $data["receipt"][0]['IDCART'];?>" class="btn">DONE</a>
                </form>
            </div>
        </div>