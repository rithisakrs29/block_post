<!DOCTYPE html>
<html lang="en">
<head>
<?php
        include("in/header.php");
    ?>

<style>
    .min-h-screen {
      min-height: 100vh;
    }
  </style>
</head>
<body class="bg-light">
  <div class="min-h-screen d-flex align-items-center justify-content-center">
    <div class="bg-dark p-5 rounded shadow-lg w-100" style="max-width: 400px;">
      <h2 class="text-center text-light mb-4">Login</h2>
      <form method="post">
        <div class="mb-3">
          <label for="email"  class="form-label text-light">Email</label>
          <input type="text" name="txt-username" class="form-control rounded-pill" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-4">
          <label for="password"  class="form-label text-light">Password</label>
          <input type="password" name="txt-password" class="form-control rounded-pill" id="password" placeholder="Enter your password" required>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <button type="submit" name="btn-login" class="btn btn-primary rounded-pill">Login</button>
          <a href="register.php" class="text-danger text-decoration-none">Don't have an account!</a>
        </div>
      </form>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

include("in/db.php");

if (isset($_POST['btn-login'])) {
  $username = $_POST['txt-username'];
  $password = $_POST['txt-password'];

  $select = ("SELECT users.*, 
       COUNT(posts.id) AS total_posts
FROM users
LEFT JOIN posts ON users.id = posts.user_id WHERE username = '$username' OR email = '$username' GROUP BY users.id");
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
      $_SESSION["date"] = $row["created_at"];
      $_SESSION["total_posts"] = $row["total_posts"];
      header("location: index.php");
    }
    else{
      echo"Incorrect username password";
    }
  }
}
?>