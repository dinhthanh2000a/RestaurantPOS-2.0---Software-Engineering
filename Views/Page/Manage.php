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

</head>

<body>
    <section class="revenue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Revenue</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="lineChart" style="width:100%;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="orders order-today">
        <div class="container">
            <h3>Orders:</h3>
            <div class="list">

                <?php
                $sum =0 ;
                foreach ($data["manage"] as $x => $val) {
                ?>
                    <div class="item">
                        <h5>Order No: <?= $val['IDPAY'];?></h5>
                        <div class="info">
                            <div class="field total">
                                <span>Time:</span>
                                <span class="price"><?= $val['PAYTIME'];?></span>
                            </div>
                            <div class="field">
                                <span>Customer</span>
                                <span class="price"><?= $val['NAMECUST'];?></span>
                            </div>
                            <div class="field">
                                <span>Phone Number: </span>
                                <span class="price"><?= $val['SDT'];?></span>
                            </div>
                            <div class="field">
                                <span>Total Price</span>
                                <span class="price"><?= $val['TOTALPRICE'];?></span>
                            </div>
                            

                        </div>
                    </div>
            </div>
        <?php
        $sum =$sum +  $val['TOTALPRICE'];
                }
        ?>
                                    <td class="text-right"> 
                                        <h4><strong>Tổng doanh thu: </strong></h4>
                                    </td>
                                <td class="text-center text-danger">
                                        <h4 id = "total"></h4>
                                    </td>
                                    <script type= 'text/javascript'>
                                        var x = "<?php echo "$sum"?>";
                                        console.log(x);
                                       
                                        document.getElementById('total').innerHTML = x;
                                    </script>

        </div>
        </div>
    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Revenue",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }, ]
            },
            options: {
                responsive: true
            }
        });
    </script>
    <script src="./script.js"></script>

</body>

</html>