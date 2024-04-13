<?php
session_start();
include '../settings/connection.php';
//include '../settings/core.php';
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql="SELECT UserID, password,rid FROM `users` WHERE email = '$email'";
    $stmt=mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($stmt);


    if ($row) {
        $user_id = $row['UserID'];
        $hashed_password = $row['password'];
        $role_id= $row['rid'];


        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role_id']=$role_id;

            header("Location: ../admin/dashboard.php");
        } else {
            $error_message = "Incorrect password";
            header("Location: ../login/login.php?error=" . urlencode($error_message));
        }
    } else {
        $error_message = "User is not signed up. Please register.";
        header("Location: ../login/login.php?error=" . urlencode($error_message));
    }
    exit();
}else {
    // Redirect to the login page if the form was not submitted
    header("Location: ../login/login.php");

}

$conn->close();
?>
