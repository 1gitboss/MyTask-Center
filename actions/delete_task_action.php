<?php
global $conn;
include "../settings/connection.php";

if(isset($_GET['jobId'])){

    $job_Id= $_GET['jobId'];

    $sql= "DELETE FROM `jobs` WHERE JobID= '$job_Id'";
    if (mysqli_query($conn, $sql)){
        header("Location: ../admin/dashboard.php?msg=deletion-successful");
        exit();

    }else{
        header("Location: ../admin/dashboard.php?msg=deletion-unsuccessful");
    }
    mysqli_close($conn);
}else {
    header("Location: ../admin/dashboard.php?msg=no-id-found");
    exit();
}
