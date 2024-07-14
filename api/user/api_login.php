<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


include("../db/connection.php");
$data = json_decode(file_get_contents("php://input"));
$email = $data->email;
$password = $data->$password;
$select = "SELECT* FROM users WHERE email = '$email'";
$result = $con ->query($select);

if($result->num_rows>0){
    $user = $result->fetch_assoc();
    if(password_verify($password, $user['password'])){
        session_start();
        $_SESSION['email'] = $email;
        echo json_encode([
            "message" => "Login yes",
            "users" => [
                "id" => $user['id'],
                "email" => $user['email'],
                "FullName" => $user['FullName']
            ]
            ]);
    }else {
        echo json_encode(["message" => "Invalid credentials"]);
    }
}else {
    echo json_encode(["message" => "Invalid credentials"]);
}

$conn->close();

?>