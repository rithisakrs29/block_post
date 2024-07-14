<?php
include("../../block_post_php/users/in/db.php");
$select = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $con ->query($select);
while($row = $result -> fetch_array(MYSQLI_ASSOC)){
    $myArr[] = $row;

}
echo json_encode($myArr);

?>