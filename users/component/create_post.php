<?php
session_start();

if (!isset($_SESSION['pass'])) {
    header("location: ../login.php");
    exit();
}
include ('../in/db.php');
//include("http://localhost:8080/learn_php/block_post_php/users/in/db.php");
$defaultImage = "http://localhost:8080/learn_php/block_post_php/users/photo_post/df.jpg";

if (isset($_POST["btn-submit"])) {
    $userid = $_SESSION["i_d"];
    $title = $con->real_escape_string($_POST["title"]);
    $content = $con->real_escape_string($_POST["content"]);
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    if (!empty($image)) {
        // Get the file extension
        $ext = pathinfo($image, PATHINFO_EXTENSION);

        // Generate a unique name for the image
        $unique_name = uniqid() . '.' . $ext;

        // Check if the uploaded file is a valid image
        if (getimagesize($tmp_name)) {
            // Set the upload path for the image
            $path_upload = "../photo_post/" . $unique_name;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($tmp_name, $path_upload)) {
                $finalImagePath = "http://localhost:8080/learn_php/block_post_php/users" . $path_upload;
            } else {
                $finalImagePath = $defaultImage;
            }
        } else {
            echo "Invalid file type.";
            exit;
        }
    } else {
        $finalImagePath = $defaultImage;
    }

    // Insert post data into the database
    $insert = "INSERT INTO posts (user_id, title, content, image) VALUES ('$userid', '$title', '$content', '$finalImagePath')";
    $res = $con->query($insert);

    if ($res == true) {
        header("location: ../index.php");
        exit();
    } else {
        echo "Can't Post";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("../in/header.php");
    ?>
  <title>Create Post</title>
</head>
<body>
<div class="">
<?php
    include("../in/navbar.php") 
  ?>
</div>
    
  <div class="container mt-5">
    <h1 class="mb-4">Create New Post</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="postTitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="postTitle" name="title" required>
      </div>
      <div class="mb-3">
        <label for="postContent" class="form-label">Content</label>
        <textarea class="form-control" id="postContent" name="content" rows="5" required></textarea>
      </div>
      <div class="mb-3">
        <label for="postImage" class="form-label">Upload Image</label>
        <input type="file" class="form-control" id="postImage" name="image">
      </div>
      <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
