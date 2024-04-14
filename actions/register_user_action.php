<?php
global $conn, $sendMl;
include "../settings/connection.php";
include "../login/sendEmail.php";


//Registering users


    $fname= mysqli_real_escape_string($conn, $_POST['fname']);
    $lname= mysqli_real_escape_string($conn, $_POST['lname']);
    $tel= mysqli_real_escape_string($conn, $_POST['tel']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
    $code= rand();



    $stmt= $conn->prepare("INSERT INTO `users` (`rid`,`fname`,`lname`,`tel`,`code`,`email`,`password`) VALUES( ?, ?, ?, ?, ?, ?, ?)") ;


    $role_id= 3;


    $stmt->bind_param("issiiss", $role_id,$fname,$lname,$tel, $code,$email,$password) ;

    if($stmt->execute()){
        $sendMl->send($code);
        header("Location: ../login/confirmEmail.php ");
    }else{ echo "Registration failed.";
         }

$stmt->close();
$conn->close();



