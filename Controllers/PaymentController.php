<?php

class PaymentController extends Controller{
    # hiển thị hóa đơn than toán 
    public function show(){
        // $menu = $this->callmodel("CartDB");
        // $menu = $menu->getDB();
        // $this->callview("Home",["page"=>"Payment","payment"=>$menu]);
        $receipt = $this->callmodel("PaymentDB");
        $receipt = $receipt->getPayment($_GET['id']);
        $this->callview("Home",["page"=>"Payment","receipt"=>$receipt]);
    }
    # thêm hóa đơn vào csdl
    function addPayment(){
        $add = $this->callmodel("PaymentDB");
        $add = $add->addPaymentDB($_GET['id']);
        
    }
}
    
?>