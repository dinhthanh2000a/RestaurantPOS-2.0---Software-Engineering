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
    function removeDB($ID){
        $array = "DELETE FROM CART WHERE IDCART = $ID;";
        $array = mysqli_query($this->connect,$array);
    }
}
?>