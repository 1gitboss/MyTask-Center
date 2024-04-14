<?php

include '../settings/connection.php';

function get_a_task($jobId){
    global $conn;

    $sql= "SELECT *,u.email FROM `jobs` 
 
            JOIN Users u ON jobs.UserID = u.UserID 
        JOIN jobstatus j on j.StatusID = jobs.StatusId
         where JobID='$jobId'";

    $stmt= mysqli_query($conn, $sql);

    if ($stmt && mysqli_num_rows($stmt)>0){
        $result=mysqli_fetch_assoc($stmt);
        return $result;
    }else{
        return null;
    }

}