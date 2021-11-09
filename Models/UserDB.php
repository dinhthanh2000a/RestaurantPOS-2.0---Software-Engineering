<?php

class UserDB extends DB{
    # thêm tài khoản người dùng mới vào csdl
    public function InsertNewUser($username,$fullname,$password,$email,$phone){
        $qr = "INSERT INTO USERS VALUES('$username','$fullname','$password','$email','$phone')";
        $result = mysqli_query($this->connect,$qr);
        return json_encode($result);
    }
    
    # thêm tài khoản nhân viên mới vào csdl
    public function InsertNewEmployee($username,$fullname,$password,$dob,$phone,$email,$address){
        $qr = "INSERT INTO EMPLOYEES VALUES('$username','$fullname','$password','$dob','$phone','$email','$address')";
        $result = mysqli_query($this->connect,$qr);
        return json_encode($result);
    }
    # lấy tài khoản một khách hàng 
    public function loginuser($username){
        $sql = "SELECT * FROM USERS WHERE USERNAME='{$username}'";
        return mysqli_query($this->connect,$sql);
    }
    # lấy tài khoản một quản lý 
    public function loginmanger($username){
        $sql = "SELECT * FROM MANAGER WHERE USERNAME='{$username}'";
        return mysqli_query($this->connect,$sql);
    }
    # lấy tài khoản một nhân viên
    public function loginemp($username){
        $sql = "SELECT * FROM EMPLOYEES WHERE USERNAME='{$username}'";
        return mysqli_query($this->connect,$sql);
    }
    /* public function checkUsername($username){
        $qr = "SELECT IDUSER FROM USERS
            WHERE username='$username'";
        $rows = mysqli_query($this->connect,$qr);
        $kq = false;
        if(mysqli_num_rows($rows)>0){
            $kq = true;
        }
        return json_encode($kq);
    } */


    
}

?>