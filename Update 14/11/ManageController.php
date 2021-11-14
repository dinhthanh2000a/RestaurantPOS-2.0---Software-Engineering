<?php
class ManageController extends Controller{
    # hiển thị trang quản lý hệ thống 
    public function show(){
        $manage = $this->callmodel("PaymentDB");
        $manage = $manage->showReceiptDB();
        $this->callview("Home",["page"=>"Manage","manage"=>$manage]);
    }
    # hiển thị trang đăng ký nhân viên
    public function registeremp(){
        if(isset($_POST["registeremp"])){
            $this->callview("Home",
                ["page"=>"Registeremp"]);
        }
    }
    # hiển thị trang thêm món ăn
    public function addDish() {
        $this->callview("Home", ["page"=>"AddDish"]);
    }
    # hiển thị trang sửa món ăn
    public function editDish() {
        $dish = $this->callmodel("DishDB");
        $id = (int)$_GET['Id'];
        $dish = $dish->getDish($id);
        $_SESSION['editId'] = $id;
        $this->callview('Home', ['page'=>'EditDish']);
    }
}
?>
