<?php
class RegisterController extends Controller{
    function show(){
        $this->callview("Home",["page"=>"Register"]);
    }
}
?>
