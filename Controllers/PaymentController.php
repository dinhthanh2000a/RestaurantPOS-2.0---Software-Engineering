<?php

class PaymentController extends Controller{
    public function show(){
        $menu = $this->callmodel("CartDB");
        $menu = $menu->getDB();
        $this->callview("Home",["page"=>"Payment","payment"=>$menu]);
    }
    function showPayment(){
        $receipt = $this->callmodel("CartDB");
        $receipt = $receipt->getPayment($_GET['id']);
        $this->callview("Home",["page"=>"Payment","receipt"=>$receipt]);
    }
    function addPayment(){
        $add = $this->callmodel("PaymentDB");
        $add = $add->addPaymentDB($_GET['id']);
        
    }
}
    
?>