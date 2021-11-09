<?php

class CartDB extends DB{
    # lấy dữ liệu bảng Cart 
    function getDB(){
        $array = "SELECT * FROM CART;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    # xóa 1 item khỏi cart
    function removeDB($ID){
        $array = "DELETE FROM CART WHERE IDCART = $ID;";
        $array = mysqli_query($this->connect,$array);
    }
    # lấy dữ liệu Cart hiển thị cho nhân viên
    function getUniqueIdCart(){
        $array = "SELECT DISTINCT IDCART,SDT,NAMECUST FROM CART where IDCART not in (select IDCART from PAYMENT);";

        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
    # thêm Cart vào csdl
    function addDB($name,$sdt,$location){
        $idCart = date('mdYhisa', time());
        $array = "";
        foreach ($_SESSION['Cart'] as $key => $value) {
            $total = $value['PRICE'] * $value['Quantity'];
            $array ="INSERT INTO CART VALUE('${idCart}', ${value['Quantity']}, ${value['PRICE']}, $total,'${name}',$sdt, ${value['IDDISH']}, '$location');";
            mysqli_query($this->connect,$array);
        }         
    }
}
?>