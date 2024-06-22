<div class="">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Block Post</a>

      <div class="collapse navbar-collapse" id="mynavbar">
        <ul style="font-size: 2.35em;" class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="../users/index.php">Home</a>
          </li>
        </ul>
        <form class="d-flex me-3">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>

        <div class="dropdown text-end">
          <a class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="
<?php
if ($_SESSION["prof_photo"]) {
  echo $_SESSION["prof_photo"];
}
?>" alt="mdo" width="42" height="42" class="rounded-circle">

          </a>
          <ul class="dropdown-menu text-small bg-secondary">
            <li><a class="dropdown-item" href="../users/create_post.php">New Post...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="../users/profile_page.php">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../users/logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>