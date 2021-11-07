<?php
class EmployeeController extends Controller{
    # hiện các đơn hàng đã được đặt
    function show(){
        $order = $this->callmodel("CartDB");
        $order = $order->getUniqueIdCart();
        $this->callview("Home",["page"=>"Employee","uniqueId"=>$order]);
    }
    # xóa đơn hàng khỏi cartDB
    function remove(){
        $remove = $this->callmodel("CartDB");
        $remove = $remove->removeDB($_GET['Id']);
        #back to Employee.php
        header('Location: index.php?controller=Employee');
    }
    
}
?>
