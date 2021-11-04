<?php
    class LoginModel extends DB{
        public function loginuser($username){
            $sql = "SELECT * FROM USERS WHERE USERNAME='{$username}'";
            return mysqli_query($this->connect,$sql);
        }

        public function loginmanger($username){
            $sql = "SELECT * FROM MANAGER WHERE USERNAME='{$username}'";
            return mysqli_query($this->connect,$sql);
        }

        public function loginemp($username){
            $sql = "SELECT * FROM EMPLOYEES WHERE USERNAME='{$username}'";
            return mysqli_query($this->connect,$sql);
        }

    }
?>