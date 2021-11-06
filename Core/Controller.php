<?php
class Controller{
    public function callmodel($model){
        require_once "./Models/".$model.".php";
        return new $model;
    }

    public function callview($view,$data = []){
        require_once "./Views/".$view.".php";
    }
}
?>