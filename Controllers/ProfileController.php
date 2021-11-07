<?php
class ProfileController extends Controller{
    # hiển thị thông tin người dùng 
    function show(){
        $output = $this->callmodel("UserDB");
        if(!empty($_SESSION['idmanager']))
           $output = $output->loginmanger($_SESSION["idmanager"]);
        else if(!empty($_SESSION['idemp']))
           $output = $output->loginemp($_SESSION["idemp"]);
        else if(!empty($_SESSION['iduser']))
           $output = $output->loginuser($_SESSION["iduser"]);
        else 
        {
            echo "<h1>Forbidden</h1>You don't have permission to access this resource.<hr>Apache/2.4.48 (Win64) OpenSSL/1.1.1l PHP/8.0.10 Server at localhost Port 80";
            return;
        }
        $result =[];
        while($s = mysqli_fetch_array($output, MYSQLI_ASSOC)){
            $result=$s;
        }
        
        $this->callview("Home",["page"=>"Profile","profile"=>$result]);
    }
}
?>
