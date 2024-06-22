<!DOCTYPE html>
<html lang="en">
<head>
<?php
        include("in/header.php");
    ?>
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
                <label for="photo" class="form-label">Profile Photo</label>
                <input type="file" name="photo_profile" class="form-control" id="phosto" placeholder="photo">
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
</body>
</html>

<?php
include("in/db.php");

$defaultPhoto = "df_pf.jpg";
if(isset($_POST["btn-register"])){
  $full_name = $_POST["txt-fullname"];
  $email = $_POST["txt-email"];
  $username = $_POST["txt-username"];
  $password = $_POST["txt-password"];
  $photo = $_FILES['photo_profile']['name'];
  $tmp_name = $_FILES['photo_profile']['tmp_name'];

  if(!empty($photo)){
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    $allowed = array("jpg", "jpeg", "png", "gif");
    if (!in_array(strtolower($ext), $allowed)) {
      $unique_name = uniqid() . '.' . $ext;

      // Setup path
      $path_upload = "photo_profile/" . $unique_name;
      if(move_uploaded_file($tmp_name, $path_upload)){
        $finalPhotoPath = $path_upload;
      }else{
        $finalPhotoPath = $defaultPhoto;
      }
        
    }
    else{
      echo "error file";
      exit;
    }
  }
  else{
    $finalPhotoPath = $defaultPhoto;
  }
  $insert = "INSERT INTO users (`FullName`,username,password,email,profile_photo) VALUES('$full_name','$username','$password','$email','$finalPhotoPath')";
  $res = $con->query($insert);
  if($res==true){
      header("location: index.php");
  }
  else{
    echo "Register Fail";
  }
}

?>