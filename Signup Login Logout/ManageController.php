<?php
class ManageController extends Controller{
    public function show(){
        $this->callview("Home",["page"=>"Manage"]);
    }
    public function registeremp(){
        if(isset($_POST["registeremp"])){
            $this->callview("Home",
                ["page"=>"Registeremp"]);
        }
    }
}
?>
