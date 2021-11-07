<?php

class LoginController extends Controller
{
    public $UserDB;
    # Tạo kết nối đến UserDB
    public function __construct()
    {
        $this->UserDB = $this->callmodel("UserDB");
    }
    #hiển thị ra trang login
    public function show()
    {
        $user = $this->callmodel('UserDB');
        $this->callview("Home", ["page" => "Login"]);
    }
    #xác thực tài khooản và đăng nhập vào hệ thống
    public function login()
    {
        $result_mess = false;
        if (isset($_POST["ExitLogin"])) {
            header('Location: index.php?controller=Menu');
        }
        if (isset($_POST["register"])) {
            header('Location: index.php?controller=register');
        }
        if (isset($_POST["submitLogin"])) {
            $username = $_POST['uname'];
            $password_input = $_POST['password'];
            $type = $_POST['type'];
            if ($type == 2) print_r($type);
            if (empty($_POST['uname']) || empty($_POST['password'])) {
                $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
            }
            if ($type == 2) {
                $result = $this->UserDB->loginemp($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if (password_verify($password_input, $password)) {
                        $_SESSION["idemp"] = $id;
                        header('Location: index.php?controller=Employee');
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview("Home", ["page" => "Login","result" => $result_mess]);
                }
            }
            if ($type == 1) {
                $result = $this->UserDB->loginuser($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if (password_verify($password_input, $password)) {
                        $_SESSION["iduser"] = $id;
                        header('Location: index.php?controller=Menu');
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                }
            }
            if ($type == 3) {
                $result = $this->UserDB->loginmanger($username);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['USERNAME'];
                        $username = $row['USERNAME'];
                        $password = $row['PASS'];
                    }
                    if ($password_input == $password) {
                        $_SESSION["idmanager"] = $id;
                        header('Location: index.php?controller=Manage');
                    } else {
                        $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                    }
                } else {
                    $this->callview("Home", ["page" => "Login", "result" => $result_mess]);
                }
            }
        }
    }

    #đăng xuất khỏi hệ thống
    public function logout(){
        unset($_SESSION["idmanager"]);
        unset($_SESSION["idemp"]);
        unset($_SESSION["iduser"]);
        session_destroy();
        #$this->callview("Home", ["page" => "Login"]);
        header('Location: index.php?controller=Login');
    }
}
