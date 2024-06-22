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
          <div class="page-header">
            <h3 class="page-title"> Form elements </h3>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Update Admin Profile</h4>

                  <form class="forms-sample" action="" methord="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Your Profile Photo</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" name="photo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" name="txt-name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="btn-update">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title" align="center">Your Profile</h3>
                  <div align="center">
                
                    <img src="<?php if(isset($_SESSION["profile_photo"])) {echo $_SESSION["profile_photo"];} ?>" alt="" class="img-thumbnail">
                  </div>
                  <h3 align="center">Full Name</h3>
                  <h4 align="center">
                        <?php
                          if (isset($_SESSION['FullName'])){
                            echo $_SESSION['FullName'];
                          }else{echo 'No Name yet';}
                        ?>
                  </h4>
                  <h3 align="center">Email</h3>
                  <h3 align="center">Username</h3>
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
if(isset($_POST["btn-update"])){
   $id = $_SESSION["id"];
   $name = $_POST["txt-name"];
   $photo = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
    // Verify file extension
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    $allowed = array("jpg", "jpeg", "png");
    if (!in_array(strtolower($ext), $allowed)) {
        echo "Error: Please select a valid file format.";
        exit;
    }
    // Generate a unique name for the file
    $unique_name = uniqid() . '.' . $ext;

    // Setup path
    $path_upload = "photo_upload/" . $unique_name;

    // Move uploaded file
    move_uploaded_file($tmp_name, $path_upload);

  $update = "INSERT INTO admin (username, `FullName`, email, password, profile_photo) VALUES ('theavy' , $name, 'theavy@gmail.com','1234',$path_upload)";
  $con->query($update);
}

?>