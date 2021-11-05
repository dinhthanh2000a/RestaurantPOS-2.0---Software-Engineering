<?php
class CartController extends Controller{
    function show(){
        $this->callview("Home",["page"=>"Cart"]);
    }
    function store(){
        echo "vào store";
        $Iddish = $_GET["Id"];
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
        header('Location: index.php');
    }
    function addCartDB(){
        #$dish = $this->callmodel("CartDB");
        echo "vào addcartDB";
    }
}
?>
