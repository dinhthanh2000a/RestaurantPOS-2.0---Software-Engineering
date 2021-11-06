<?php
class ManageController extends Controller{
    function show(){
        $this->callview("Home",["page"=>"Manage"]);
    }
    function showReceipt(){
        $manage = $this->callmodel("PaymentDB");
        $manage = $manage->showReceiptDB();
        $this->callview("Home",["page"=>"Manage","manage"=>$manage]);
    }
}
?>
