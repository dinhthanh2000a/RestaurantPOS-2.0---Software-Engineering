<?php

class UserDB extends DB{

    public function InsertNewUser($username,$fullname,$password,$email,$phone){
        $qr = "INSERT INTO USERS VALUES('$username','$fullname','$password','$email','$phone')";

        $result = false;
        if(mysqli_query($this->connect,$qr)){
            $result = true;
        }
        return json_encode($result);
    }
    
    public function InsertNewEmployee($username,$fullname,$password,$dob,$phone,$email,$address){
        $qr = "INSERT INTO EMPLOYEES VALUES('$username','$fullname','$password','$dob','$phone','$email','$address')";

        $result = false;
        if(mysqli_query($this->connect,$qr)){
            $result = true;
        }
        return json_encode($result);
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