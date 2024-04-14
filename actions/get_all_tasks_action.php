<?php
include "../settings/connection.php";
include_once "../settings/core.php";


function getTasks(){
    $User_Id=$_SESSION['user_id'];
    global $conn;
    $result=array();
    $sql= "SELECT a.JobID,a.Title, a.CategoryID, a.Location, a.Description, a.EstimatedWorkTime, 
                c.CategoryId, c.CategoryName,a.PayExpected, a.StatusId, s.StatusID, s.StatusName
            FROM jobs a
            JOIN category c on c.CategoryId = a.CategoryID
            JOIN jobstatus s ON a.StatusId = s.StatusID
            WHERE UserID= '$User_Id';";

    $stmt= mysqli_query($conn, $sql);

    if ($stmt && mysqli_num_rows($stmt)>0){

        while ($row=mysqli_fetch_array($stmt)){
            $result[]=$row;
        }
    }
    return $result;

}

function getTasksPending()
{
    $User_Id=$_SESSION['user_id'];
    global $conn;
    $sql="SELECT * FROM jobs WHERE StatusId=1 AND UserID= '$User_Id' ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getTasksInProgress()
{
    $User_Id=$_SESSION['user_id'];
    global $conn;
    $sql="SELECT * FROM jobs WHERE StatusId=2 AND UserID= '$User_Id' ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getTasksCompleted()
{
    $User_Id=$_SESSION['user_id'];
    global $conn;

    $sql="SELECT * FROM jobs WHERE StatusId=3 AND UserID= '$User_Id' ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getOther()
{
    global $conn;
    $sql="SELECT *, Users.email FROM jobs 
            JOIN Users ON jobs.UserID = Users.UserID 
                         WHERE `CategoryID` =5 ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getTotal()
{
    global $conn;
    $sql="SELECT * FROM jobs";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}
function getOffice()
{
    global $conn;
    $sql="SELECT *, Users.email FROM jobs 
            JOIN Users ON jobs.UserID = Users.UserID 
                         WHERE `CategoryID` =4 ";

    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getAssistance()
{
    global $conn;
    $sql="SELECT *, Users.email FROM jobs 
            JOIN Users ON jobs.UserID = Users.UserID 
                         WHERE `CategoryID` =3 ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getOutdoor()
{
    global $conn;
    $sql="SELECT *, Users.email FROM jobs 
            JOIN Users ON jobs.UserID = Users.UserID 
                         WHERE `CategoryID` =2 ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

function getCleaning()
{
    global $conn;
    $sql="SELECT *, Users.email FROM jobs 
            JOIN Users ON jobs.UserID = Users.UserID 
                         WHERE `CategoryID` =1 ";
    $stmt= mysqli_query($conn, $sql);

    if ($stmt){
        return mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    }else return false;

}

