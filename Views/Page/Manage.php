<style>
    .model-chart{
        width:70%;
        margin:0 auto;
    }
</style>
<section class="menu">
    <h1>Doanh thu theo ngày:</h1>
    <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Revenue</h3> -->
                        </div>
                        <div class="card-body">
                            <div class="chart model-chart">
                                <canvas id="lineChart" style="width:100%;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <table>
        <str>
            <td>
            <span style="font-size:20px;"><strong>Tổng doanh thu ngày: </strong></span>
            </td>
            <td>
            <span style="font-size:30px;" id = "totalday"></span>
            </td>
        </str>
        
    </table>
    <br>
            <span style="font-size:20px; margin-top:30px;"><strong>Tổng doanh thu: </strong></span>
            
            <span style="font-size:30px;" id = "total"></span><br>

    <div class="container orders order-today">
        <h3 style="font-size:30px;margin:10px;">Orders:</h3>
        <div class="list">
            <?php
            $sum =0 ;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            date('Y-m-d H:i:s');
            //echo date("l",strtotime(date('2021-11-16 10:03:04')));
            //echo date("m");
            //echo date("l",strtotime(date('2021-11-17 10:03:04')));
            $totalday = 0;
            $dataRevenue = []; for($i=7;$i<22;$i++) array_push($dataRevenue,0);
            foreach ($data["manage"] as $x => $val) {
                if(date("ymd",strtotime(date($val['PAYTIME']))) == date("ymd")) {
                    $xs = date("H",strtotime(date($val['PAYTIME'])))-7;
                    if($xs < count($dataRevenue) && $xs >= 0)
                    $dataRevenue[date("H",strtotime(date($val['PAYTIME'])))-7] += $val['TOTALPRICE'];

                    $totalday +=$val['TOTALPRICE'];
                }

            ?>
                <div class="item">
                    <h5>Order No: <?= $val['IDPAY'];?></h5>
                    <div class="info">
                        <div class="field total">
                            <span>Time:</span>
                            <span class="price"><?= $val['PAYTIME']?></span>
                        </div>
                        <div class="field">
                            <span>Customer</span>
                            <span class="price"><?= $val['NAMECUST']?></span>
                        </div>
                        <div class="field">
                            <span>Phone Number: </span>
                            <span class="price"><?= $val['SDT']?></span>
                        </div>
                        <div class="field">
                            <span>Total Price</span>
                            <span class="price"><?= $val['TOTALPRICE']?></span>
                        </div>
                    </div>
                </div>
    <?php
    $sum =$sum +  $val['TOTALPRICE'];
            }   
    ?>
    
        </div>
    </div>
    
</section>



<script type= 'text/javascript'>
            var x = "<?= $sum?>";
        document.getElementById('total').innerHTML = x + " VNĐ";
        document.getElementById('totalday').innerHTML = <?= $totalday?> + "VNĐ";
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var xvalue = [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
        var m = <?= json_encode($dataRevenue) ?>;
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: xvalue,
                datasets: [{
                    label: "Revenue",
                    data: m,
                    backgroundColor: [
                        'rgb(133, 241, 176)',
                    ],
                    borderColor: [
                        'rgb(0, 255, 102)',
                    ],
                    borderWidth: 2
                }, ]
            },
            options: {
                scales: {
                    xAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'Giờ'
                    }
                    }],
                    yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'Doanh số'
                    }
                    }]
                }     
            }
        });

        
    </script>
</div>