<?php
class RegisterController extends Controller{

    public $UserDB;
    # kết nối cơ sở dữ liệU UserDB
    public function __construct(){
        $this->UserDB = $this->callmodel("UserDB");
    }
    # hiển thị trang đăng ký 
    public function show(){
        $this->callview("Home",["page"=>"Register"]);
    }
   # đăng ký tài khoản khách hàng
    public function userregister(){
        //1. get data employee nhập
        if(isset($_POST["btnregister"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            // 2. Insert database bảng USERS
            $kq = $this->UserDB->InsertNewUser($username,$fullname,$password,$email,$phone);
            // 3. Show kết quả thành công/ thất bại
            $this->callview("Home",
            [
                'page'=>'register',
                'result' => $kq
            ]);
        }
    }
    # đăng ký tài khoản nhân viên
    public function employeeregister(){
        //1. get data employee nhập
        if(isset($_POST["btnregister"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            // 2. Insert database bảng USERS
            $kq = $this->UserDB->InsertNewEmployee($username,$fullname,$password,$dob,$phone,$email,$address);
            // 3. Show kết quả thành công/ thất bại
            $this->callview("Home",
            [
                'page'=>'registeremp',
                'result' => $kq
            ]);
        }
    }
}
?>
