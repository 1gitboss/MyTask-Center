<?php

include("../settings/connection.php");
function select_category()
{
    global $conn;
    $stmt = mysqli_query($conn, "SELECT * FROM category");

    if ($stmt) {
        while ($row = mysqli_fetch_assoc($stmt)) {
            echo "<option value='" . $row['CategoryId'] . "'>" . $row['CategoryName'] . "</option>";
        }
    } else {
        echo "<option value=''>No Category found</option>";
    }

    mysqli_close($conn);
}

function selectStatus()
{
    global $conn;

    echo "<option value='" . 1 . "'>" . 'Pending' . "</option>";
    echo "<option value='" . 2 . "'>" . 'In Progress' . "</option>";
    echo "<option value='" . 3 . "'>" . 'Complete' . "</option>";
}


