<?php

class PaymentDB extends DB{
    # lấy toàn bộ hóa đơn đã thanh toán 
    // function getDB(){
    //     $array = "SELECT * FROM PAYMENT;";
    //     $array = mysqli_query($this->connect,$array);
    //     $result=[];
    //     while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
    //         array_push($result,$s);
    //     }
    //     return $result;
    // } 
    # lấy dữ liệu để in hóa đơn thanh toán 
    function getPayment($id){
        $array = "SELECT IDCART,QUANTITY,cart.PRICE,TOTALPRICE,SDT,NAMECUST,DISHNAME FROM cart INNER JOIN dish ON cart.IDDISH=dish.IDDISH WHERE IDCART='$id';";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    # thêm 1 hóa đơn mới vào csdl
    function addPaymentDB($IDCART){
    
        $sql = "SELECT QUANTITY, PRICE FROM CART WHERE IDCART = '$IDCART';";
        $resultset = mysqli_query($this->connect, $sql);
        $list = [];
        while($row = mysqli_fetch_array($resultset, MYSQLI_ASSOC)){
            $list[] = $row;
        }
        $price = 0;
        for ($x = 0; $x < count($list); $x++) {
            $price += $list[$x]['QUANTITY'] * $list[$x]['PRICE'];
        }
        $count = count($list);
        $sql1 = "INSERT INTO PAYMENT(QUANTITY, PRICE, TOTALPRICE, PAYTIME, METHODS, IDCART)
            VALUES($count,$price,$price,NOW(),'CASH',$IDCART);";
        if (mysqli_query($this->connect, $sql1)) {
        }
        else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
        // for ($x = 0; $x < count($list); $x++) {
        //     $totalprice = $list[$x]['QUANTITY'] * $list[$x]['PRICE'];
        //     $QUANTITY = $list[$x]['QUANTITY'];
        //     $PRICE = $list[$x]['PRICE'];
        //     $sql1 = "INSERT INTO PAYMENT(QUANTITY, PRICE, TOTALPRICE, PAYTIME, METHODS, IDCART)
        //     VALUES(".$QUANTITY.", ".$PRICE.", ".$totalprice.", NOW() ,'CASH', '$IDCART');";
            
        //     if (mysqli_query($this->connect, $sql1)) {
                
        //     }
        //     else {
        //         echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        //     }
            
        // }
    }

    # lấy tất cả hóa đơn từ csdl
    function showReceiptDB(){
        $array = "SELECT DISTINCT PAYMENT.IDPAY, PAYMENT.IDCART,PAYMENT.TOTALPRICE,SDT,NAMECUST,PAYTIME FROM CART INNER JOIN PAYMENT ON CART.IDCART=PAYMENT.IDCART;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }

}
?>