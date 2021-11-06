<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        a {
            text-decoration: none;
        }

        .payment {
            padding-top: 6rem;
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index: 10000;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }
    </style>


</head>

<body>

    <div class="payment">
        <div class="payment">
            <div class="row">
                <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <address>
                                <strong>BK restaurant</strong>
                                <br>
                                Customer: <?= $data["receipt"][0]['NAMECUST'] ?>
                                <br>
                                
                                <abbr >Phone :  </abbr> <?= $data["receipt"][0]['SDT'] ?>
                            </address>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">                            
                            <p>
                                <em>Receipt : <?= $data["receipt"][0]['IDCART'] ?></em>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <h1>Receipt</h1>
                        </div>
                        </span>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sum =0 ;
                                
                                foreach ($data["receipt"] as $x => $val) {
                                ?>
                                    <tr>
                                        <td class="col-md-9"><em><?= $val['DISHNAME'];?></em></h4>
                                        </td>
                                        <td class="col-md-1" style="text-align: center"> <?= $val['QUANTITY'];?> </td>
                                        <td class="col-md-1 text-center"><?= $val['PRICE'];?></td>
                                        <td class="col-md-1 text-center"><?= $val['TOTALPRICE'];?></td>
                                        
                                    </tr>
                                    
                                <?php
                                    $sum =$sum +  $val['TOTALPRICE'];
                                }                               
                                ?>

                                <tr>
                                  
                                    <td>   </td>
                                    <td>   </td>
                                    <td class="text-right">
                                        <h4><strong>Total: </strong></h4>
                                    </td>
                                    <td class="text-center text-danger">
                                        <h4 id = "total"></h4>
                                    </td>
                                    <script type= 'text/javascript'>
                                        var x = "<?php echo "$sum"?>";
                                        console.log(x);
                                       
                                        document.getElementById('total').innerHTML = x;
                                    </script>
                                </tr>
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location.href='#popup4'">
                            CASH   <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                        <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location.href='#popup5'">
                            ONLINE   <span class="glyphicon glyphicon-chevron-right"></span>
                        </button></td>
                    </div>
                </div>
            </div>
        </div>

    </div>


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
                        </label>
                        <label>Thank you for using our service! See you soon.</label>
                          
                    </div>
                    <div class="btn btn-success btn-lg btn-block">  
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a href="/Project/index.php?controller=Payment&action=addPayment&id=<?= $data["receipt"][0]['IDCART'];?>" class="btn">DONE</a>
                </form>
            </div>
        </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>