<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include("../db/connection.php");
$select = "SELECT
    users.profile_photo AS profile_image,
    users.`FullName` AS `FullName`,
    posts.content AS contents,
    posts.title AS title,
    posts.image AS postImage,
    posts.created_at AS post_date,
    COUNT(DISTINCT likes.id) AS total_like,
    COUNT(DISTINCT coment.id) AS total_comment
    FROM posts posts 
    LEFT JOIN 
    users users on posts.user_id = users.id
    LEFT JOIN 
    likes likes on likes.post_id = posts.id
    LEFT JOIN 
    comments coment on coment.post_id = posts.id
    GROUP BY posts.id, users.id
    ORDER BY posts.created_at";
$result = $con ->query($select);
while($row = $result -> fetch_array(MYSQLI_ASSOC)){
    $myArr[] = $row;

}
echo json_encode($myArr);

?>