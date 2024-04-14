<?php
$server= "127.0.0.1";
$username= "root";
$password= "FzZsqq:ARta3";
//$password= "";
$database= "task_center";


$conn= new mysqli($server, $username, $password,$database)
or die("Could not connect to database '$database");


if ($conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}



?>