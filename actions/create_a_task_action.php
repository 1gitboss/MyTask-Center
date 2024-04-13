<?php
include "../settings/core.php";
global $conn;
include "../settings/connection.php";

//echo isset($_POST['create-task']);

//Registering users
//if (isset($_POST['create-task'])) {

    $title = mysqli_real_escape_string($conn, $_POST['task-title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $category = mysqli_real_escape_string($conn, $_POST['task-category']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $time = mysqli_real_escape_string($conn, $_POST['work-time']);
    $userID=$_SESSION['user_id'];

    var_dump($category);
    $stmt = $conn->prepare("INSERT INTO `jobs`(UserID, Title, Description, CategoryID, Location, PayExpected, EstimatedWorkTime) VALUES(?, ?, ?, ?, ?, ?, ?)");




    $stmt->bind_param("issisii", $userID, $title, $description, $category, $location,$price, $time);

    if ($stmt->execute()) {
        echo "Task Created Successfully.";

    } else {
        echo "Unsuccessful creation.";
    }

    $stmt->close();
    $conn->close();



