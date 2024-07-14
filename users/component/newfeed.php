<?php
 //include ("http://localhost:8080/learn_php/block_post_php/users/in/db.php");

$select = "SELECT
    users.profile_photo AS profile_image,
    users.`FullName` AS `FullName`,
    posts.content AS contents,
    posts.id AS post_id,
    posts.user_id AS user_id,
    posts.title AS title,
    posts.image AS postImage,
    posts.created_at AS post_date,
    COUNT(DISTINCT likes.id) AS total_like,
    COUNT(DISTINCT coment.id) AS total_comment
    FROM posts posts 
    LEFT JOIN 
    users users on posts.user_id = users.id
    LEFT JOIN 
    likes likes on likes.post_id = posts.id
    LEFT JOIN 
    comments coment on coment.post_id = posts.id
    GROUP BY posts.id, users.id
    ORDER BY posts.created_at DESC";
$res = $con->query($select);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $id = $row['post_id'];
        $profileImage = $row['profile_image'];
        $FullName = $row['FullName'];
        $user_id = $row['user_id'];
        $total_comment = $row['total_comment'];
        $total_like = $row['total_like'];
        $title = $row["title"];
        $content = $row["contents"];
        $image = $row["postImage"];
        $create_time = $row["post_date"];
        ?>
        <section>
            <div class="card mt-5">
                <div class="card-body">
                    <!-- Data -->
                    <div class="d-flex mb-3 align-items-center">
                    <a href="http://localhost:8080/learn_php/block_post_php/users/pages/profileid_page.php?id=<?= $user_id ?>">
                        <img src="<?= $profileImage ?>" class="img-fluid rounded-circle" alt="Avatar"
                            style="width: 40px; height: 40px; object-fit: cover;" />
                            
                    </a>
                    <div class="ms-2 flex-grow-1">
                        <a href="http://localhost:8080/learn_php/block_post_php/users/pages/profileid_page.php?id=<?= $user_id ?>" class="text-dark mb-0 ">
                            <strong><?= $FullName ?></strong>
                        </a>
                        <i class="fa-solid fa-circle-check text-primary ms-2"></i>
                        <br>
                        <small><?= htmlspecialchars($create_time) ?></small>
                    </div>
                    
                    <div class="dropdown">
                        <div class="" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                        </div>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                    <!-- Description -->
                    <div>
                        <b class="text-info"><?= htmlspecialchars($title) ?></b>
                        <p class="mt-2">
                            <?= htmlspecialchars($content) ?>
                        </p>
                    </div>
                </div>
                <!-- Media -->
                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                    <img src="<?= $image ?>" class="w-100" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
                <!-- Media -->
                <!-- Interactions -->
                <div class="card-body">
                    <!-- Reactions -->
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <a href="">
                                <i class="fas fa-thumbs-up text-primary"></i>
                                <!-- <i class="fas fa-heart text-danger"></i> -->
                                <span><?= htmlspecialchars($total_like) ?></span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="text-muted"> <?= htmlspecialchars($total_comment) ?> </a>
                        </div>
                    </div>
                    <!-- Reactions -->
                    <!-- Buttons -->
                    <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg"
                            data-mdb-ripple-color="dark">
                            <i class="fas fa-thumbs-up me-2"></i>Like
                        </button>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg"
                            data-mdb-ripple-color="dark">
                            <i class="fas fa-comment-alt me-2"></i>Comment
                        </button>
                    </div>
                    <!-- Buttons -->
                    <!-- Comments -->
                    <!-- Input -->
                    <div class="d-flex mb-3">
                        <a href="http://localhost:8080/learn_php/block_post_php/users/pages/profile_page.php?id=<?php
                if ($_SESSION["i_d"]) {
                    echo $_SESSION["i_d"];
                }
                ?>">
                            <img src="<?php
                            if ($_SESSION["prof_photo"]) {
                                echo $_SESSION["prof_photo"];
                            }
                            ?>" class="img-fluid rounded-circle" alt="Avatar"
                                style="width: 40px; height: 40px; object-fit: cover;" />
                        </a>
                        <div data-mdb-input-init class="form-outline w-100">
                            <textarea class="form-control" placeholder="Write a comment" id="textAreaExample" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }
} else {
    echo "no data";
}
?>