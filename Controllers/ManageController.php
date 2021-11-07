<?php
class ManageController extends Controller{
    public $UserDB;
    # Tạo kết nối đến UserDB
    public function __construct()
    {
        $this->UserDB = $this->callmodel("UserDB");
    }
    # hiển thị trang quản lý hệ thống 
    public function show(){
        $manage = $this->callmodel("PaymentDB");
        $manage = $manage->showReceiptDB();
        $this->callview("Home",["page"=>"Manage","manage"=>$manage]);
    }
    # hiển thị trang đăng ký nhân viên
    public function registeremp(){
        if(isset($_POST["registeremp"])){
            $this->callview("Home",
                ["page"=>"Registeremp"]);
        }
    }
    # hiển thị danh sách nhân viên
    public function showemp(){
        $emp = $this->callmodel("UserDB");
        $emp = $emp->getEmp();
        $this->callview("Home",["page"=>"Manage_Emp","emp"=>$emp]);
        
        /* $result = $this->UserDB->showemp();
        echo "<h2>Dữ liệu có trong bảng cars</h2>
            <table border='1'>
            <tr>
            <th>Full name</th>
            <th>Birthday</th>
            <th>Phone number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['FULLNAME'] . "</td>";
            echo "<td>" . $row['BIRTHDAY'] . "</td>";
            echo "<td>" . $row['SDT'] . "</td>";
            echo "<td>" . $row['EMAIL'] . "</td>";
            echo "<td>" . $row['ADDRESS'] . "</td>";
            echo "</tr>";
        }
        echo "</table>"; */
    }
}
?>
