<?php
session_start();
if (!isset($_SESSION["pass"])) {
    header("locaion: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("in/header.php");
    ?>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div>
            <?php
            include ("in/navbar.php");
            ?>
        </div>
        <div class="container mt-5">
            <div class="row">
                <!-- Profile Image Section -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="
<?php
if ($_SESSION["prof_photo"]) {
    echo $_SESSION["prof_photo"];
}
?>" alt="mdo" width="100" height="100" class="rounded-circle  mx-auto ">

                        <div class="card-body text-center">
                            <h5 class="card-title">
<?php
if ($_SESSION["FName"]) {
    echo $_SESSION["FName"];
}
?>
                            </h5>
                            <p class="card-text">Software Engineer</p>
                            <button class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>
                </div>
                <!-- Profile Details Section -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile Information</h5>
                            <p class="card-text"><strong>Email:</strong> john.doe@example.com</p>
                            <p class="card-text"><strong>Phone:</strong> (123) 456-7890</p>
                            <p class="card-text"><strong>Address:</strong> 1234 Main St, Anytown, USA</p>
                            <h5 class="card-title mt-4">About Me</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit
                                amet accumsan arcu. Proin ac consequat mi, a congue orci.</p>
                            <h5 class="card-title mt-4">Skills</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">JavaScript</li>
                                <li class="list-group-item">Python</li>
                                <li class="list-group-item">React</li>
                                <li class="list-group-item">Node.js</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>