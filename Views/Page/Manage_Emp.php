<section class="emp">
<link type="text/css" rel="stylesheet" href="./public/css/employee.css">
    <div class="overlay"></div>
    <form action="index.php?controller=manage&action=registeremp" method="POST">
        <button name="registeremp">Add employee</button>
    </form>
    <div class="title"><h2 class="heading">EMPLOYEES</h2></div>
        
        <div class="container-manage-emp" style="margin-top:20px">
        <div class="list">
        <table>
        <tr>
            <th>Full name</th>
            <th>Birthday</th>
            <th>Phone number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>
        <?php foreach($data["emp"] as $x => $val) {?>
            <tr>
                <td><div><?= $val['FULLNAME'];?>
                        <a href="index.php?controller=Manage">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div></td>
                <td><div><?= $val['BIRTHDAY'];?>
                        <a href="index.php?controller=Manage">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div></td>
                <td><div><?= $val['SDT'];?>
                        <a href="index.php?controller=Manage">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div></td>
                <td><div><?= $val['EMAIL'];?>
                        <a href="index.php?controller=Manage">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div></td>
                <td><div><?= $val['ADDRESS'];?>
                        <a href="index.php?controller=Manage">
                        <i class="fas fa-edit"></i>
                    </a>
                    </div></td>
                <td><div>
                    <a href="index.php?controller=Manage">
                        <i class="fas fa-eraser"></i>
                    </a>
                    </div></td></td>
            </tr>
        <?php } ?>
        </table>
        </div>
    </div>
    
</section>