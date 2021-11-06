<?php

class DishController extends Controller{
    public function show(){
        $dish = $this->callmodel("DishDB");
        $dish = $dish->getDish($_GET['Id']);
        $this->callview("Home",["page"=>"Dish","dish"=>$dish]);
    }
}

?>