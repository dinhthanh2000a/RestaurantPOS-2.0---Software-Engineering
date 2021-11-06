<header class="header">
    <div class="container header__container">
        <a href="?controller=Menu" class="logo"><i class="fas fa-utensils"></i>POS</a>
        <div class="icons">
            <a href="?controller=Menu">
                <i class= "fas fa-home"></i>
            </a>
            <a href="?controller=Cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?= empty($_SESSION["Cart"])?0:count($_SESSION["Cart"])?>
            <button id="login">Log in</button>
            <div class="user" id="user">
                <i class="fas fa-user"></i>
                <i class="fas fa-chevron-down"></i>
                <div class="user-desc">
                    <a href="./profile.html">Profile</a>
                    <a href="./employee.html">Employee</a>
                    <a href="./manage.html">Manage</a>
                </div>
            </div>
        </div>
    </div>
</header>