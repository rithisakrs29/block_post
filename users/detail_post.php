<?php
session_start();

if (!$_SESSION['pass']) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("in/header.php");
    ?>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div>
            <?php
            include ("in/navbar.php");
            ?>
        </div>
        <div class="mt-5">
            <?php
                include ("in/db.php");
                if (isset($_GET["id"])) {
                    $post_id = $_GET["id"];
                    $select = "SELECT * FROM posts WHERE id= $post_id";
                    $result = $con->query($select);
                    while ($row = $result->fetch_assoc()) {
                        $post_id = $row["id"];
                        $post_title = $row["title"];
                        $post_image = $row["image"];
                        $post_content = $row["content"];
            ?>
                    <div class="row">
                        <!-- Image Section -->
                        <div class="col-md-6">
                            <img width="100%"
                                src="<?= $post_image ?>"
                                class="img-fluid" alt="Detail Image">
                        </div>
                        <!-- Detail Section -->
                        <div class="col-md-6">
                            <h5 class=""><strong><?= $post_title ?></strong></h5>
                            <p class="lead"><?= $post_content ?></p>
                            
                            <div class="mt-4">
                                <button class="btn btn-secondary btn-lg"><i class="bi bi-heart"></i> Like</button>
                                <button class="btn btn-primary btn-lg"> <i class="bi bi-chat"></i> Comment</button>
                            </div>
                        </div>
                    </div>

                    <?php

                }
            }
            ?>
        </div>
    </div>

</body>

</html>