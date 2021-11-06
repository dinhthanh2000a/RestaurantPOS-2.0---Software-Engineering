<?php
class EmployeeController extends Controller{
    
    function show(){
        $order = $this->callmodel("CartDB");
        $order = $order->getDB();
        $this->callview("Home",["page"=>"Employee","order"=>$order]);
    }
    function showUniqueIdCart(){
        $uniqueId = $this->callmodel("CartDB");
        $uniqueId = $uniqueId->getUniqueIdCart();
        $this->callview("Home",["page"=>"Employee","uniqueId"=>$uniqueId]);
    }
    function remove(){
        $remove = $this->callmodel("CartDB");
        $remove = $remove->removeDB($_GET['Id']);
        #back to Employee.php
        header('Location: index.php?controller=Employee');
    }

}
?>