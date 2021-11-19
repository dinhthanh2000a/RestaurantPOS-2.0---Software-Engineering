<?php

class DishDB extends DB{
    # lấy 1 món ăn theo id từ csdl DISH
    function getDish($id){
        $array = "SELECT * FROM DISH where IDDISH =".$id.";";
        $result = $this->connect->query($array);
        $result = $result->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
    # lấy toàn bộ món ăn từ csdl DISH
    function getDB(){
        $array = "SELECT * FROM DISH;";
        $array = mysqli_query($this->connect,$array);
        $result=[];
        while($s = mysqli_fetch_array($array, MYSQLI_ASSOC)){
            array_push($result,$s);
        }
        return $result;
    }

    # thêm món ăn
    function addDish($name, $price, $description, $type, $image) {
        $array = "SELECT MAX(IDDISH) AS MAXID FROM DISH;";
        $result = mysqli_query($this->connect, $array);
        $data = mysqli_fetch_array($result);
        $id = $data['MAXID'];
        $id += 1;
        $array = "INSERT INTO DISH VALUES($id, '${name}', $price, '${description}', '${type}', '${image}');";
        $result = mysqli_query($this->connect,$array);
        return json_encode($result);
    }
    # lấy hình ảnh món ăn
    public function getImg($id) {
        $array = "SELECT PICTURE FROM DISH WHERE IDDISH = $id;";
        $array = mysqli_query($this->connect,$array);
        while ($row = mysqli_fetch_array($array)) {
            $result = $row["PICTURE"];
        }
        return $result;
    }
    # xóa món ăn
    function removeDish($id) {
        $array = "DELETE FROM DISH WHERE IDDISH = $id;";
        $array = mysqli_query($this->connect,$array);
    }
    # sửa món ăn
    function editDish($id, $name, $price, $description, $type, $image) {
        $array = "UPDATE DISH SET DISHNAME = '${name}', PRICE = $price, DESCRIP = '${description}', TYPEDISH = '${type}', PICTURE = '${image}' WHERE IDDISH = $id;";
        $array = mysqli_query($this->connect,$array);
        return json_encode($array);
    }
    # sửa món ăn (không sửa ảnh)
    function editDishnoImg($id, $name, $price, $description, $type) {
        $array = "UPDATE DISH SET DISHNAME = '${name}', PRICE = $price, DESCRIP = '${description}', TYPEDISH = '${type}' WHERE IDDISH = $id;";
        $array = mysqli_query($this->connect,$array);
        return json_encode($array);
    }
}
?>