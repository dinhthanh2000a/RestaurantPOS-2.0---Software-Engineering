<?php

class LoginController extends Controller
{
    public $UserDB;
    public $LoginModel;
    public $MenuModel;
    public function __construct()
    {
        $this->UserDB = $this->callmodel("UserDB");
        $this->LoginModel = $this->callmodel("LoginModel");
        $this->MenuModel = $this->callmodel("DishDB");
        $this->MenuModel = $this->MenuModel->getDB();
    }
    public function show()
    {
        $user = $this->callmodel('UserDB');
        $this->callview("Home", ["page" => "Login"]);
    }
    public function login()
    {
        $result_mess = false;

        if (isset($_POST["ExitLogin"])) {
            $this->callview(
                "Home",
                [
                    "page" => "Menu",
                    "menu" => $this->MenuModel
                ]
            );
        }
        if (isset($_POST["register"])) {
            $this->callview(
                "Home",
                ["page" => "register"]
            );
        }
        if (isset($_POST["submitLogin"])) {
            $username = $_POST['uname'];
            $password_input = $_POST['password'];
            $type = $_POST['type'];
            if ($type == 2) print_r($type);
            if (empty($_POST['uname']) || empty($_POST['password'])) {
                $this->callview(
                    "Home",
                    [
                        "page" => "Login",
                        "result" => $result_mess
                    ]
                );
            }
            if ($type == 2) {
                $result = $this->LoginModel->loginemp($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if (password_verify($password_input, $password)) {
                        $_SESSION["id"] = $id;
                        $this->callview(
                            "Home",
                            [
                                "page" => "Employee",
                                "result" => $result_mess = true
                            ]
                        );
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview(
                        "Home",
                        [
                            "page" => "Login",
                            "result" => $result_mess
                        ]
                    );
                }
            }
            if ($type == 1) {
                $result = $this->LoginModel->loginuser($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if (password_verify($password_input, $password)) {
                        $_SESSION["id"] = $id;
                        $this->callview(
                            "Home",
                            [
                                "page" => "Menu",
                                "menu" => $this->MenuModel
                            ]
                        );
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview(
                        "Home",
                        [
                            "page" => "Login",
                            "result" => $result_mess
                        ]
                    );
                }
            }
            if ($type == 3) {
                $result = $this->LoginModel->loginmanger($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if ($password_input == $password) {
                        $_SESSION["id"] = $id;
                        $this->callview(
                            "Home",
                            [
                                "page" => "Manage",
                                "menu" => $this->MenuModel
                            ]
                        );
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview(
                        "Home",
                        [
                            "page" => "Login",
                            "result" => $result_mess
                        ]
                    );
                }
            }
        }
    }

    public function logout(){
        unset($_SESSION["id"]);
        session_destroy();
        $this->callview("Home", ["page" => "Login"]);
    }
}
