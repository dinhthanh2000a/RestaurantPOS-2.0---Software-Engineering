<?php

class DishDB extends DB{
    function getDish($id){
        $array = "SELECT * FROM DISH where IDDISH =".$id.";";
        $result = $this->connect->query($array);
        $result = $result->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
    function getDB(){
        $array = "SELECT * FROM DISH;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }
}
?>