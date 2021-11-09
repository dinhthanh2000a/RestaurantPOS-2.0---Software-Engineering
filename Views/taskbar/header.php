<header class="header">
    <div class="container header__container">
        <a href="?controller=Menu" class="logo"><i class="fas fa-cloud-meatball"></i> POS</a>
        <div class="icons">
            <a href="?controller=Menu">
                <i class= "fas fa-home"></i>
            </a>
            <?php if(empty($_SESSION["idmanager"]) && empty($_SESSION["idemp"])) { ?>
            <a href="index.php?controller=Cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <span name="dish-in-cart"><?= empty($_SESSION["Cart"])?0:count($_SESSION["Cart"]);?></span>
            <?php } ?>

            <?php if(!empty($_SESSION["idmanager"])) { ?>
            <a href="index.php?controller=Manage">
                <i class="fas fa-sliders-h"></i>
            </a><?php } ?>

            <?php if(!empty($_SESSION["idemp"])) { ?>
            <a href="index.php?controller=Employee">
                <i class="fas fa-concierge-bell"></i>
            </a><?php } ?>

            <?php if(!empty($_SESSION["iduser"]) || !empty($_SESSION["idemp"]) ||!empty($_SESSION["idmanager"])) { ?>
            <a class="loginsss" href="index.php?controller=Profile"><i class="fas fa-user"></i>
            </a><?php } ?>

            <?php if(empty($_SESSION["iduser"]) && empty($_SESSION["idemp"]) && empty($_SESSION["idmanager"])) { ?>
            <a class="loginsss" href="index.php?controller=Login">Log in</a>
            <?php }
            else{ ?> <a class="loginsss" href="index.php?controller=Login&action=logout">Log out</a> <?php } ?>
            
        </div>
    </div>
</header>