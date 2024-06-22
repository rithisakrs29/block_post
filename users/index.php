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
    //include ("in/header.php");
    ?>
    <title>Block Post</title>
    <style>
        .scrollable-col {
            max-height: 500px;
            /* or any desired height */
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include ("in/navbar.php");
        ?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">Home</h1>
            </div>
        </div>
        <div>
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <div class="scrollable-col">
                    <?php
                    include ("in/db.php");

                    function truncateContent($content, $wordLimit) {
                        $words = explode(' ', $content);
                        if (count($words) > $wordLimit) {
                            return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
                        }
                        return $content;
                    }

                    $select = "SELECT * FROM posts ORDER BY created_at DESC";
                    $res = $con->query($select);
                    if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {
                            $id = $row["id"];
                            $userid= $row["user_id"];
                            $title = $row["title"];
                            $content = $row["content"];
                            $image = $row["image"];
                            $create_time = $row["created_at"];

                            $content = truncateContent($content, 15);
                            ?>


                            <a style="text-decoration: none;" href="detail_post.php?id=<?= $id ?>">
                                <div class="col">
                                <div class="card h-100">
                                    <img src="<?= $image ?>" class="card-img-top" alt="Image for <?= htmlspecialchars($title) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= htmlspecialchars($title) ?></h5>
                                        <p class="card-text"><?= htmlspecialchars($content) ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"><?= htmlspecialchars($create_time) ?></small>
                                    </div>
                                </div>
                            </a>
                            </div> <br>
                            <?php  
                        }
                    } else {
                        echo "No data";
                    }
                    ?>
                </div>

                <div class="col">
                    <div class="card h-100 scrollable-col">
                        <?php include ("notification_page.php"); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
