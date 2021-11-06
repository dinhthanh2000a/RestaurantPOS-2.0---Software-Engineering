<?php
class ProfileController extends Controller{
    function show(){
        $this->callview("Home",["page"=>"Profile"]);
    }
}
?>
