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
    
}
?>
