<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      /* width */
::-webkit-scrollbar {
  width: 5px;
  height: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: cyan; 
  border-radius: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
        body {
          overflow-x: hidden;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            height: 40px;
        }
        .header .nav-icons {
            display: flex;
            align-items: center;
        }
        .header .nav-icons a {
            text-decoration: none;
            color: #343a40;
            margin-left: 15px;
        }
        .header .nav-icons a:hover {
            color: #007bff;
        }
        .newsfeed-section {
            overflow-y: auto;
            max-height: calc(100vh - 60px); /* Adjust based on header height */
        }
    </style>
</head>
<body>
<!-- Header -->
<header class="header bg-success">
        <div class="container">
            <a href="#" class="logo">
                <p>block post</p>
            </a>
            <div class="search-box">
                <input type="text" placeholder="Search...">
            </div>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-home fa-lg"></i></a>
                <a href="#"><i class="fas fa-bell fa-lg"></i></a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 25px"/>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="#">View Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

<div class=" mt-3 mb-4">
    <div class="row">
        <!-- Section: Profile -->
        <div class="col-md-3 d-none d-md-block">
            <section>
                <div class="card p-4">
                    <div class="image d-flex flex-column justify-content-center align-items-center">
                        <button class="btn btn-secondary">
                            <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100"/>
                        </button>
                        <span class="name mt-3">Eleanor Pena</span>
                        <span class="idd">@eleanorpena</span>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                            <span class="idd1">Oxc4c16a645_b21a</span>
                            <span><i class="fa fa-copy"></i></span>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                            <span class="number">1069 <span class="follow">Followers</span></span>
                        </div>
                        <div class="d-flex mt-2">
                            <button class="btn1 btn-dark">Edit Profile</button>
                        </div>
                        <div class="text mt-3">
                            <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br>
                                Artist/ Creative Director by Day #NFT minting@ with FND night.
                            </span>
                        </div>
                        <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                            <span><i class="fa fa-twitter"></i></span>
                            <span><i class="fa fa-facebook-f"></i></span>
                            <span><i class="fa fa-instagram"></i></span>
                            <span><i class="fa fa-linkedin"></i></span>
                        </div>
                        <div class="px-2 rounded mt-4 date">
                            <span class="join">Joined May,2021</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Section: Newsfeed -->
        <div class="col-md-6 col-12 newsfeed-section">
            <section>
                <div class="card">
                    <div class="card-body">
                        <!-- Data -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <a href="" class="text-dark mb-0">
                                    <strong>Anna Doe</strong>
                                </a>
                                <a href="" class="text-muted d-block" style="margin-top: -6px">
                                    <small>10h</small>
                                </a>
                            </div>
                        </div>
                        <!-- Description -->
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ex non impedit corporis sunt nisi nam fuga dolor est, saepe vitae delectus fugit, accusantium qui nulla aut adipisci provident praesentium?
                            </p>
                        </div>
                    </div>
                    <!-- Media -->
                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                        <img src="https://tmssl.akamaized.net/images/foto/galerie/cristiano-ronaldo-al-nassr-2023-1692731063-114594.jpg?lm=1692731118" class="w-100"/>
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
                                    <i class="fas fa-heart text-danger"></i>
                                    <span>124</span>
                                </a>
                            </div>
                            <div>
                                <a href="" class="text-muted"> 8 comments </a>
                            </div>
                        </div>
                        <!-- Reactions -->
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-thumbs-up me-2"></i>Like
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-comment-alt me-2"></i>Comment
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-share me-2"></i>Share
                            </button>
                        </div>
                        <!-- Buttons -->
                        <!-- Comments -->
                        <!-- Input -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div data-mdb-input-init class="form-outline w-100">
                                <textarea class="form-control" id="textAreaExample" rows="2"></textarea>
                                <label class="form-label" for="textAreaExample">Write a comment</label>
                            </div>
                        </div>
                        <!-- Input -->
                        <!-- Answers -->
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Malcolm Dosh</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Janet Garcia</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Malcolm Dosh</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="card">
                    <div class="card-body">
                        <!-- Data -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <a href="" class="text-dark mb-0">
                                    <strong>Anna Doe</strong>
                                </a>
                                <a href="" class="text-muted d-block" style="margin-top: -6px">
                                    <small>10h</small>
                                </a>
                            </div>
                        </div>
                        <!-- Description -->
                        <div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ex non impedit corporis sunt nisi nam fuga dolor est, saepe vitae delectus fugit, accusantium qui nulla aut adipisci provident praesentium?
                            </p>
                        </div>
                    </div>
                    <!-- Media -->
                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                        <img src="https://tmssl.akamaized.net/images/foto/galerie/cristiano-ronaldo-al-nassr-2023-1692731063-114594.jpg?lm=1692731118" class="w-100"/>
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
                                    <i class="fas fa-heart text-danger"></i>
                                    <span>124</span>
                                </a>
                            </div>
                            <div>
                                <a href="" class="text-muted"> 8 comments </a>
                            </div>
                        </div>
                        <!-- Reactions -->
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-thumbs-up me-2"></i>Like
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-comment-alt me-2"></i>Comment
                            </button>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                <i class="fas fa-share me-2"></i>Share
                            </button>
                        </div>
                        <!-- Buttons -->
                        <!-- Comments -->
                        <!-- Input -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div data-mdb-input-init class="form-outline w-100">
                                <textarea class="form-control" id="textAreaExample" rows="2"></textarea>
                                <label class="form-label" for="textAreaExample">Write a comment</label>
                            </div>
                        </div>
                        <!-- Input -->
                        <!-- Answers -->
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Malcolm Dosh</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Janet Garcia</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                        <!-- Single answer -->
                        <div class="d-flex mb-3">
                            <a href="">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="border rounded-circle me-2" alt="Avatar" style="height: 40px"/>
                            </a>
                            <div>
                                <div class="bg-body-tertiary rounded-3 px-3 py-1">
                                    <a href="" class="text-dark mb-0">
                                        <strong>Malcolm Dosh</strong>
                                    </a>
                                    <a href="" class="text-muted d-block">
                                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, aspernatur!</small>
                                    </a>
                                </div>
                                <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Section: Notifications -->
        <div class="col-md-3 d-none d-md-block">
            <section>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notifications</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>John Doe</strong> liked your post.
                                <small class="text-muted d-block">2 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <strong>Jane Smith</strong> commented on your photo.
                                <small class="text-muted d-block">4 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <strong>Michael Johnson</strong> started following you.
                                <small class="text-muted d-block">6 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <strong>Emily Brown</strong> shared your post.
                                <small class="text-muted d-block">8 hours ago</small>
                            </li>
                            <li class="list-group-item">
                                <strong>William Davis</strong> mentioned you in a comment.
                                <small class="text-muted d-block">10 hours ago</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>



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

$defaultPhoto = "http://localhost:8080/learn_php/block_post_php/users/df_pf.jpg";
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
      $path_upload = "http://localhost:8080/learn_php/block_post_php/users/photo_profile/" . $unique_name;
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

<!-- register -->