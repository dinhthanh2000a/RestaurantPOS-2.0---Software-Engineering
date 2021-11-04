<?php

class UserDB extends DB{

    public function InsertNewUser($username,$fullname,$password,$phone){
        $qr = "INSERT INTO USERS VALUES('1','$username','$fullname','$password','$phone')";

        $result = false;
        if(mysqli_query($this->connect,$qr)){
            $result = true;
        }
        return json_encode($result);
    }
    
    public function InsertNewEmployee($code,$username,$fullname,$password,$dob,$phone,$email,$address){
        $qr = "INSERT INTO EMPLOYEES VALUES('$code','$username','$fullname','$password','$dob','$phone','$email','$address')";

        $result = false;
        if(mysqli_query($this->connect,$qr)){
            $result = true;
        }
        return json_encode($result);
    }

    public function checkUsername($username){
        $qr = "SELECT IDUSER FROM USERS
            WHERE username='$username'";
        $rows = mysqli_query($this->connect,$qr);
        $kq = false;
        if(mysqli_num_rows($rows)>0){
            $kq = true;
        }
        return json_encode($kq);
    }


    
}

?>