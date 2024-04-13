<?php
global $conn;
include('../settings/connection.php');



  $id = $_GET['code'];

$sql = "UPDATE `users` SET is_verified='1' WHERE code =$id";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "Your account is verified";
    header("Location: http/localhost/login/login.php");


}

?>
