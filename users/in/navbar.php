<header class="header bg-secondary">
    <div class="container">
        <a href="http://localhost:8080/learn_php/block_post_php/users/" class="logo bg-warning">
            <p>block post</p>
        </a>
        <div class="search-box">
            <input type="text" placeholder="Search...">
        </div>
        <div class="nav-icons">
            <a href="http://localhost:8080/learn_php/block_post_php/users/"><i class="fas fa-home fa-lg"></i></a>
            <a href="http://localhost:8080/learn_php/block_post_php/users/pages/notification_page.php"><i class="fas fa-bell fa-lg"></i></a>
            <div class="dropdown">

                <img src="<?php
                if ($_SESSION["prof_photo"]) {
                    echo $_SESSION["prof_photo"];
                }
                ?>" class="img-fluid rounded-circle ms-2" alt="Avatar" style="width: 40px; height: 40px; object-fit: cover;"
                     data-bs-toggle="dropdown" aria-expanded="false" />

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="http://localhost:8080/learn_php/block_post_php/users/pages/profile_page.php?id=<?php
                if ($_SESSION["i_d"]) {
                    echo $_SESSION["i_d"];
                }
                ?>">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="http://localhost:8080/learn_php/block_post_php/users/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>