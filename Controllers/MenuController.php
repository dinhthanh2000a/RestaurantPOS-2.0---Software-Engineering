<?php

class MenuController extends Controller{
    # hiển thị trang menu ra màn hình 
    public function show(){
        $menu = $this->callmodel("DishDB");
        $menu = $menu->getDB();
        $this->callview("Home",["page"=>"Menu","menu"=>$menu]);
    }
}

?>