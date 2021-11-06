<?php

class PaymentDB extends DB{
    function getDB(){
        $array = "SELECT * FROM PAYMENT;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    } 

    function addPaymentDB($IDCART){
    
        $sql = "SELECT QUANTITY, PRICE FROM CART WHERE IDCART = ".$IDCART.";";
        $conn = mysqli_connect('localhost', 'root', '', 'restaurant');
        $resultset = mysqli_query($conn, $sql);
        $list = [];
        while($row = mysqli_fetch_array($resultset, MYSQLI_ASSOC)){
            $list[] = $row;
        }
        for ($x = 0; $x < count($list); $x++) {
            $totalprice = $list[$x]['QUANTITY'] * $list[$x]['PRICE'];
            $QUANTITY = $list[$x]['QUANTITY'];
            $PRICE = $list[$x]['PRICE'];
            $sql1 = "INSERT INTO PAYMENT(QUANTITY, PRICE, TOTALPRICE, PAYTIME, METHODS, IDCART)
            VALUES(".$QUANTITY.", ".$PRICE.", ".$totalprice.", NOW() ,'CASH', '$IDCART');";
            
            if (mysqli_query($conn, $sql1)) {
                
            }
            else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
            
        }
        
        echo '<meta http-equiv="refresh" content="00; URL=/Project/index.php"/>';
    }
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