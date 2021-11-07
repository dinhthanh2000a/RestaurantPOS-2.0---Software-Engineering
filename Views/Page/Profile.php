<section class="profile">
        <div class="profile-container">
            <div class="profile-info">
                <form action="index.php?controller=Profile&action=fixprofile" method="POST">
                <i class="fas fa-user"></i>
                <h4 class="profile-name"><?=$data['profile']['FULLNAME']?></h4>
                <p class="profile-address">Tên đăng nhập: <?=$data['profile']['USERNAME']?></p>
                <ul class="profile-list">
                    <li class="profile-item">
                        <h5 class="profile-item__num">SĐT</h5>
                        <span class="profile-item__name"><?=$data['profile']['SDT']?></span>
                    </li>
                    <li class="profile-item">
                        <h5 class="profile-item__num">Email</h5>
                        <span class="profile-item__name"><?=$data['profile']['EMAIL']?></span>
                    </li>
                </ul>
                </form>
            </div>
        </div>
        
</section>