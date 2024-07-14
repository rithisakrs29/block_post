<?php
session_start();
if (!isset($_SESSION['i_d'])){
    header("location: http://localhost:8080/learn_php/block_post_php/users/login.php");
    exit();
}

?>