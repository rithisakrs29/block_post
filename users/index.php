<?php
session_start();

if (!isset($_SESSION['pass'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("in/header.php");
    ?>
    <title>Block Post</title>
</head>

<body>
    <?php
        include ("in/navbar.php");
    ?>

    <div class=" mt-3 mb-4">
        <div class="row">
            <!-- Section: Profile -->
            <div class="col-md-4 d-none d-md-block">
                <?php
                    include ('component/profile.php')
                ?>
            </div>
            <!-- Section: Newsfeed -->
            <div class="col-md-5 col-12 newsfeed-section">
                <?php
                    include ("../users/component/newfeed.php")
                ?>
            </div>

            <!-- Section: Notifications -->
            <div class="col-md-3 d-none d-md-block">
                <?php
                    include ("../users/component/notification.php")
                ?>
            </div>

        </div>
    </div>


</body>

</html>