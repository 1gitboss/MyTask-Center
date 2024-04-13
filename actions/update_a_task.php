<?php
include "../settings/connection.php";
include "../settings/core.php";
global $conn;

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == 'POST'){

    $new_title = mysqli_real_escape_string($conn, $_POST['task-title']);
    $new_description = mysqli_real_escape_string($conn, $_POST['description']);
    $new_category = mysqli_real_escape_string($conn, $_POST['task-category']);
    $new_status = mysqli_real_escape_string($conn, $_POST['task-status']);
    $new_price = mysqli_real_escape_string($conn, $_POST['price']);
    $job_ID=$_POST['jobID'];

    $stmt=mysqli_query($conn, "UPDATE `jobs` SET 
                  Title='$new_title', CategoryID='$new_category', PayExpected='$new_price',
                  StatusId='$new_status', Description='$new_description' 
                  WHERE JobID='$job_ID' ");

    if($stmt){
        header("Location: ../admin/dashboard.php");
    }else{
        $error= "Edit Failed";
        header("Location: ../edit_task_view.php?error=".urlencode($error));
    }

    $conn->close();
}