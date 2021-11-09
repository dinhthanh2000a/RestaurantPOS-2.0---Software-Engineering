<?php

class MenuController extends Controller{
    # hiển thị trang menu ra màn hình 
    public function show(){
        $menu = $this->callmodel("DishDB");
        $menu = $menu->getDB();
        $this->callview("Home",["page"=>"Menu","menu"=>$menu]);
    }
    # lưu món ăn đã chọn vào giỏ hàng
    function StoreDish(){
        $Iddish = $_POST["Iddish"];
        $dish = $this->callmodel("DishDB");
        $dish = $dish->getDish($Iddish);
        if(empty($_SESSION['Cart'])){
            $dish['Quantity']=1;
            $_SESSION['Cart'][$Iddish]=$dish;
        }
        else if(!array_key_exists($Iddish,$_SESSION['Cart'])){
            $dish['Quantity']=1;
            $_SESSION['Cart'][$Iddish]=$dish;
        }
        else{
            $_SESSION['Cart'][$Iddish]['Quantity'] += 1;
        }
        echo count($_SESSION["Cart"]);
    }
}

?>