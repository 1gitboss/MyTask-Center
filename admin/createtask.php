<?php
include "../settings/core.php";
include "../functions/select_category_fxn.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/createtask.css">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>

    <title>Create task </title>
</head>
<body>
    <div class='form-wrap'>
        <div id="form-container">
            <form action="http://localhost/mytask-center/actions/create_a_task_action.php" method="post" id="task-form" name="create-task">
                <span class="login100-form-title">
                        Create Your Task
                </span>

                <div id="name-field" class="wrap-input100">
                    <label for="task-title"> Task Title</label>
                    <input type="text" class="input100" name="task-title" id="task-title" placeholder="Eg: Washing Cars" required>
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
                    <label for="work-time">Estimated Worktime</label>
                    <input type="number" class="input100" id="work-time" name="work-time" placeholder="Estimated hours" required>
                </div>

                <div id="name-field" class="wrap-input100">
                    <label for="price">Rate (Price)</label>
                    <input type="number" id="price" name="price" class="input100" placeholder= GHC required>
                </div>
                
                <div id="name-field" class="wrap-input100">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="input100" placeholder= "Eg: Kasoa" required>
                </div>

                <div>
                    <label for="description">Task Description</label>
                    <textarea type="text" name="description"
                    class="input100" id="description" required> </textarea>
                </div><br>

<!--                <div class="container-submit-task-btn">-->
                    <button type="submit" class="submit-task-btn" >
                        Submit</button>
<!--                </div>-->
            </form>
        </div>

    </div>
    <script src="../js/createtask.js"></script>
</body>
</html>