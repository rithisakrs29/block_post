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
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <label for="loginEmail" class="form-label">Username or Email address</label>
                <input type="text" name="txt-username" class="form-control" id="loginEmail" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" name="txt-password" class="form-control" id="loginPassword" placeholder="Enter password">
              </div>
              <div class="d-grid">
                <button type="submit" name="btn-login" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="register.php">Don't have an account? Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

include("in/db.php");

if (isset($_POST['btn-login'])) {
  $username = $_POST['txt-username'];
  $password = $_POST['txt-password'];

  $select = ("SELECT * FROM users WHERE username = '$username' OR email = '$username' ");
  $res = $con->query($select);

  if($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if(($username == $row["username"] && $password == $row["password"]) || ($username == $row["email"] && $password == $row["password"])){
      session_start();
      $_SESSION["user"] = $row["username"];
      $_SESSION["pass"] = $row["password"];
      $_SESSION["eml"] = $row["email"];
      $_SESSION["FName"] = $row["FullName"];
      $_SESSION["i_d"] = $row["id"];
      $_SESSION["prof_photo"] = $row["profile_photo"];
      header("location: index.php");
    }
    else{
      echo"Incorrect username password";
    }
  }
}
?>