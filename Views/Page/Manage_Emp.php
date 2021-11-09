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
                    </div></td>
                <td><div><?= $val['BIRTHDAY'];?>
                    </div></td>
                <td><div><?= $val['SDT'];?>
                    </div></td>
                <td><div><?= $val['EMAIL'];?>
                    </div></td>
                <td><div><?= $val['ADDRESS'];?>
                    </div></td>
                <td><div>
                    <a href="index.php?controller=Manage&action=delete&un=<?= $val['USERNAME'];?>">
                        <i class="fas fa-eraser"></i>
                    </a>
                    </div></td></td>
            </tr>
        <?php } ?>
        </table>
        </div>
    </div>
    
</section>