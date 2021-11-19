<?php
class ManageController extends Controller{
    public $UserDB;
    # Tạo kết nối đến UserDB
    public function __construct()
    {
        $this->UserDB = $this->callmodel("UserDB");
    }
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
    # hiển thị danh sách nhân viên
    public function showemp(){
        $emp = $this->callmodel("UserDB");
        $emp = $emp->getemp();
        $this->callview("Home",["page"=>"Manage_Emp","emp"=>$emp]);
    }
    # xóa 1 nhân viên
    public function delete(){
        $emp = $this->callmodel("UserDB");
        $username = $_GET['un'];
        $emp->deleteemp($username);
        $emp = $emp->getemp();
        header('Location: index.php?controller=Manage&action=showemp');
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
        $this->callview('Home', ['page'=>'EditDish','dish'=>$dish]);
    }
}
?>
