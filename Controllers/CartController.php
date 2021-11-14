<?php
class CartController extends Controller{

    # hiển thị trang cart 
    function show(){
        $this->callview("Home",["page"=>"Cart"]);
    }
    # lưu thông tin đặt món vào CartDB
    function addCartDB(){

        $dish = $this->callmodel("CartDB");        

        if(empty($_SESSION['iduser'])){
            if(empty($_POST['fullname']) || empty($_POST['phone'])){ echo 0; return;}
            $dish = $dish->addDB($_POST['fullname'],$_POST['phone'],$_POST['place']);
        }
        else {
            $user = $this->callmodel("UserDB");
            $user = $user->loginuser($_SESSION['iduser']);
            $result=[];
            while($s = mysqli_fetch_array($user, MYSQLI_ASSOC)){
                $result = $s;
            }
            $dish->addDB($result['FULLNAME'],$result['SDT'],$_POST['place']);
        }
        echo 1;
        unset($_SESSION['Cart']);
    }

    # tang so luong cua mon an
    function ReduceQuantity(){
        if(isset($_POST['dish'])){
            $_SESSION['Cart'][$_POST['dish']]['Quantity']--;
            print_r(json_encode([$_SESSION['Cart'][$_POST['dish']]['Quantity'],$_SESSION['Cart'][$_POST['dish']]['PRICE']]));
        }
    }
    # giam so luong cua mon an
    function IncreaseQuantity(){
        if(isset($_POST['dish'])){
            $_SESSION['Cart'][$_POST['dish']]['Quantity']++;
            print_r(json_encode([$_SESSION['Cart'][$_POST['dish']]['Quantity'],$_SESSION['Cart'][$_POST['dish']]['PRICE']]));
        }
    }
    # xoa mon an khoi gio
    function RemoveItem(){
        unset($_SESSION['Cart'][$_POST['dish']]);
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
}
?>
