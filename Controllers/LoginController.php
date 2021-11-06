<?php
class LoginController extends Controller{
    
    function show(){
        $this->callview("Home",["page"=>"Login"]);
    }
}
?>