<section>
    <div class="card p-4">
        <div class=" d-flex flex-column justify-content-center align-items-center">

            <img src="<?php
            if ($_SESSION["prof_photo"]) {
                echo $_SESSION["prof_photo"];
            }
            ?>" class="img-fluid rounded-circle" alt="Avatar" style="width: 100px; height: 100px; object-fit: cover;" />

            <span class="name mt-3">
                <?php
                if ($_SESSION["FName"]) {
                    echo $_SESSION["FName"];
                }
                ?>
            </span>
            <span class="idd">
                <?php
                if ($_SESSION["eml"]) {
                    echo $_SESSION["eml"];
                }
                ?>
            </span>

            <div class="d-flex flex-row justify-content-center align-items-center mt-1">
                <span class="number"> <?php
                if ($_SESSION["total_posts"]) {
                    echo $_SESSION["total_posts"];
                }
                ?> <span class="follow">Posts</span></span>
            </div>
            <div class="d-flex mt-3">
               <a href="component/edit_profile.php">
               <button class="btn btn-primary">Edit Profile</button>
               </a>
                <a href="http://localhost:8080/learn_php/block_post_php/users/component/create_post.php">
                    <button class="btn btn-secondary ms-2">Create post</button>
                </a>
            </div>

            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                <span><i class="fa fa-twitter"></i></span>
                <span><i class="fa fa-facebook-f"></i></span>
                <span><i class="fa fa-instagram"></i></span>
                <span><i class="fa fa-linkedin"></i></span>
            </div>
            <div class="px-2 rounded mt-4 date">
                <span class="join">Joined on
                    <?php
                    if ($_SESSION["date"]) {
                        echo $_SESSION["date"];
                    }
                    ?>
                </span>

            </div>
        </div>
    </div>
</section>