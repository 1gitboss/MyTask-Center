
<?php
include "../settings/core.php";
include "../functions/select_category_fxn.php";
include "../functions/get_a_task_fxn.php";

if (isset($_GET['jobId'])){
    $ret_id= $_GET['jobId'];

    $ret_task=get_a_task($ret_id);

    if ($ret_task){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/createtask.css">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>

    <title>Update task </title>
</head>
<body>
<div class='form-wrap'>
    <div id="form-container">
        <form action="http://localhost/mytask-center/actions/update_a_task.php" method="POST" id="task-form" name="create-task">
                <span class="login100-form-title">
                        Edit Your Task
                </span>
            <input type="hidden" name="jobID" value="<?php echo $ret_task['JobID'];?>">
            <div id="name-field" class="wrap-input100">
                <label for="task-title"> Task Title</label>
                <input type="text" class="input100" name="task-title" id="task-title" placeholder="Updated Task" value="<?php echo $ret_task['Title'];?>" required>
            </div>


            <div id="name-field" class="wrap-input100">
                <label for="price">Rate (Price)</label>
                <input type="number" id="price" name="price" class="input100" placeholder= GHC value="<?php echo $ret_task['PayExpected']?>" required>
            </div>

            <div id="name-field" class="wrap-input100">
                <label for="task-category"> Category</label>
                <select name="task-category" class="input100" id="task-category">
                    <?php
                    select_category();
                    ?>
                </select>
            </div>

            <div id="name-field" class="wrap-input100">
                <label for="task-status"> Task Status</label>
                <p>
                    <strong>Current Status:</strong><?php echo $ret_task['StatusName']?>
                </p>
                <select name="task-status" class="input100" id="task-status">
<!--                    <option value="1">testing</option>-->
                    <?php
                    selectStatus();
                    ?>
                </select>
            </div>

            <div>
                <label for="description">Task Description</label>
                <textarea name="description" class="input100" id="description" cols="4"><?php echo $ret_task['Description']?></textarea>
            </div><br>

            <!--                <div class="container-submit-task-btn">-->
            <button type="submit" class="submit-task-btn" >
                Save Changes
            </button>
            <!--                </div>-->
        </form>
    </div>

</div>
<!--<script src="../js/createtask.js"></script>-->
</body>

</html>

<?php
    }else{
        header("Location: ../admin/dashboard.php");
        exit();
    }

} else{
    $error= "No Id Found.";
    header("Location: ../view/error.php?error=".urlencode($error));
}
?>