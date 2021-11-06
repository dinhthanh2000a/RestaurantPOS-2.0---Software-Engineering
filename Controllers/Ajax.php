<?php
class Ajax extends Controller
{
    public $UserDB;

    public function __construct(){
        $this->UserDB = $this->callmodel("UserDB");
    }

    public function checkUserName(){
        $username = $_POST["username"];

        $this->UserModel->checkUserName("username");
    }
}
?>