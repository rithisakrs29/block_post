
<?php
include("in/db.php");

$defaultPhoto = "http://localhost:8080/learn_php/block_post_php/users/df_pf.jpg";

if(isset($_POST["btn-register"])){
  $full_name = $_POST["txt-fullname"];
  $email = $_POST["txt-email"];
  $username = $_POST["txt-username"];
  $password = $_POST["txt-password"];
  $photo_url = $_POST['photo_url'] ?? '';
  $photo = $_FILES['photo_profile']['name'] ?? '';
  $tmp_name = $_FILES['photo_profile']['tmp_name'] ?? '';

  if (!empty($photo)) {
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    $allowed = array("jpg", "jpeg", "png", "gif");
    if (in_array(strtolower($ext), $allowed)) {
      $unique_name = uniqid() . '.' . $ext;
      $path_upload = "users/photo_profile/" . $unique_name;
      if (move_uploaded_file($tmp_name, $path_upload)) {
        $finalPhotoPath = $path_upload;
      } else {
        $finalPhotoPath = $defaultPhoto;
      }
    } else {
      echo "Invalid file type.";
      exit;
    }
  } elseif (!empty($photo_url)) {
    if (filter_var($photo_url, FILTER_VALIDATE_URL)) {
      $finalPhotoPath = $photo_url;
    } else {
      echo "Invalid URL.";
      exit;
    }
  } else {
    $finalPhotoPath = $defaultPhoto;
  }

  $insert = "INSERT INTO users (`FullName`, username, password, email, profile_photo) VALUES('$full_name', '$username', '$password', '$email', '$finalPhotoPath')";
  $res = $con->query($insert);
  if ($res == true) {
    
    header("location: login.php");
  } else {
    echo "Register Fail";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include("in/header.php"); ?>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h3>Block Post Register</h3>
          </div>
          <div class="card-body">
            <form method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="photoChoice" class="form-label">Profile Photo</label>
                <select id="photoChoice" class="form-control" onchange="togglePhotoInput(this.value)">
                  <option value="file">Upload from Computer</option>
                  <option value="url">Provide URL</option>
                </select>
              </div>
              <div class="mb-3" id="fileInput" style="display: block;">
                <label for="photo" class="form-label">Upload Photo</label>
                <input type="file" name="photo_profile" class="form-control" id="photo" placeholder="photo">
              </div>
              <div class="mb-3" id="urlInput" style="display: none;">
                <label for="photoURL" class="form-label">Photo URL</label>
                <input type="url" name="photo_url" class="form-control" id="photoURL" placeholder="Enter photo URL">
              </div>
              <div class="mb-3">
                <label for="FullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="txt-fullname" id="full-name" placeholder="Enter full name">
              </div>
              <div class="mb-3">
                <label for="registerEmail" class="form-label">Email address</label>
                <input type="email" name="txt-email" class="form-control" id="registerEmail" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="txt-username" class="form-control" id="username" placeholder="username">
              </div>
              <div class="mb-3">
                <label for="registerPassword" class="form-label">Password</label>
                <input type="password" name="txt-password" class="form-control" id="registerPassword" placeholder="Enter password">
              </div>
              <div class="d-grid">
                <button type="submit" name="btn-register" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="login.php">Already have an account? Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function togglePhotoInput(choice) {
      if (choice === 'file') {
        document.getElementById('fileInput').style.display = 'block';
        document.getElementById('urlInput').style.display = 'none';
      } else {
        document.getElementById('fileInput').style.display = 'none';
        document.getElementById('urlInput').style.display = 'block';
      }
    }
  </script>
</body>
</html>

