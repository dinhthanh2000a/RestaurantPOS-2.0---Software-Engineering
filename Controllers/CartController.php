<?php
class CartController extends Controller{

    # hiển thị trang cart 
    function show(){
        $this->callview("Home",["page"=>"Cart"]);
    }
    # lưu món ăn đã chọn vào giỏ hàng
    function store(){
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
    # lưu thông tin đặt món vào CartDB
    function addCartDB(){
        $dish = $this->callmodel("CartDB");

        if(empty($_SESSION['iduser'])){
            $dish = $dish->addDB($_POST['fullname'],$_POST['phone']);
        }
        else {
            $user = $this->callmodel("UserDB");
            $user = $user->loginuser($_SESSION['iduser']);
            $result=[];
            while($s = mysqli_fetch_array($user, MYSQLI_ASSOC)){
                $result = $s;
            }
            $dish->addDB($result['FULLNAME'],$result['SDT']);
        }
        unset($_SESSION['Cart']);
        header('Location: index.php?controller=Cart&order=1');
    }
    # nút cộng
    function addButton() {
        $Iddish = $_GET['Id'];
        $_SESSION['Cart'][$Iddish]['Quantity'] += 1;
        header('Location: index.php?controller=Cart');
    }
    # nút trừ
    function minusButton() {
        $Iddish = $_GET['Id'];
        if ($_SESSION['Cart'][$Iddish]['Quantity'] > 1) {
            $_SESSION['Cart'][$Iddish]['Quantity'] -= 1;
        }
        header('Location: index.php?controller=Cart');
    }
    # bỏ món ăn
    function removeCart() {
        $Iddish = $_GET['Id'];
        unset($_SESSION['Cart'][$Iddish]);
        header('Location: index.php?controller=Cart');
    }
    # tính tổng giá tiền trong giỏ hàng
    function TotalPrice(){
        $sum = 0;
        foreach ($_SESSION['Cart'] as $key => $value){
            $sum += $value['Quantity']*$value['PRICE'];
        }
        echo $sum;
    }
}
?>
