<?php

class CartDB extends DB{
    function getDB(){
        $array = "SELECT * FROM CART;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    function getUniqueIdCart(){
        $array = "SELECT DISTINCT IDCART,SDT,NAMECUST FROM CART;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    function getPayment($id){
        $array = "SELECT IDCART,QUANTITY,cart.PRICE,TOTALPRICE,SDT,NAMECUST,DISHNAME FROM cart INNER JOIN dish ON cart.IDDISH=dish.IDDISH WHERE IDCART=".$id.";";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    function removeDB($ID){
        $array = "DELETE FROM CART WHERE IDCART = $ID;";
        $array = mysqli_query($this->connect,$array);
    }
    function addDB($ID){
        $array = "INSERT INTO CART(QUANTITY,PRICE,TOTALPRICE,IDUSER,IDDISH) VALUE(2,20000,PRICE*QUANTITY,100000,1000000);";
        $array = mysqli_query($this->connect,$array);
    }
}
?>