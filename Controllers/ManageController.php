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
}
?>
