<?php
class CartController extends Controller{
    function show(){
        $this->callview("Home",["page"=>"Cart"]);
    }
    function store(){
        echo "vào store";
        echo $_POST["Id"];
    }
}
?>
