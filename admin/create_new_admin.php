<?php
session_start();

if(!$_SESSION['password']){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ("partials/header.php");
  ?>
  <title>Setting</title>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <?php
    include ("partials/_sidebar.php");
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php
      include ("partials/_navbar.php");
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="justify-content: center;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Create New Admin</h4>

                  <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Your Profile Photo</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" name="photo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" name="txt-name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="" placeholder="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="email" id="" class="form-control" required>
                        <div class="invalid-feedback">Invalid Email</div>
                    </div>
                    <div class="from-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" id="" class="form-control" required>
                        <div class="invalid-feedback">Please enter your password!</div><br>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2" name="btn-add">Create</button>
                    <button class="btn btn-dark">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php
    include ("partials/footer.php");
    ?>
</body>
</html>

<?php
include ("conection/conec.php");

if ( isset($_POST["btn-add"])){
    $username =  $_POST["username"];
    $password = $_POST["password"];
    $full_name = $_POST["txt-name"];
    $email = $_POST["email"];
    $photo = $_FILES["photo"]["name"];

    $tmp_name = $_FILES['photo']['tmp_name'];
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    $allowed = array("jpg", "jpeg", "png", "gif");
    if (!in_array(strtolower($ext), $allowed)) {
        echo "Error: Please select a valid file format.";
        exit;
    }
    $unique_name = uniqid() . '.' . $ext;
    $path_upload = "admin_photo/" . $unique_name;
    move_uploaded_file($tmp_name, $path_upload);
    
    $insert = "INSERT INTO `admin`(`username`, `email`, `password`, `FullName`, `profile_photo`) VALUES ('$username','$email','$password','$full_name','$path_upload')";
    $con->query($insert);
    if ($con->query($insert) === TRUE) {
        echo "Photo uploaded successfully!";
        header("location: admin.php");
    } 
}
?>
