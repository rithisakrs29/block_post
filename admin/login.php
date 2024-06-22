<?php
session_start(); // Start the session at the top

include("conection/conec.php");

if (isset($_POST['btn-login'])) {
  $username = $_POST['txt_username'];
  $password = $_POST['txt_password'];

  $select = ("SELECT * FROM admin WHERE username = '$username' OR email = '$username' ");
  $res = $con->query($select);

  if($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if(($username == $row["username"] && $password == $row["password"]) || ($username == $row["email"] && $password == $row["password"])){
      $_SESSION["username"] = $row["username"];
      $_SESSION["password"] = $row["password"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["FullName"] = $row["FullName"];
      $_SESSION["id"] = $row["id"];
      $_SESSION["profile_photo"] = $row["profile_photo"];
      header("Location: index.php");
      exit(); // Ensure no further code is executed
    }
    else{
      $error_message = "Incorrect username or password";
    }
  }
  else {
    $error_message = "Username or email not found";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <?php 
        include("partials/header.php");
    ?>
</head>
<body>
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="" method="post">
                <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" name="txt_username" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="txt_password" class="form-control p_input" required>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="btn-login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <?php
                    if (isset($error_message)) {
                        echo '<div class="alert alert-danger">' . $error_message . '</div>';
                    }
                  ?>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php 
        include("partials/footer.php");
    ?>
</body>
</html>
