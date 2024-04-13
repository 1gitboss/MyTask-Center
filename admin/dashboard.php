<?php
//include_once "../settings/core.php";
include "../settings/connection.php";
include "../functions/homepage_fxn.php";
//authorize();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<header>

    <h1>Welcome Back To MyTask Center</h1>
    <p>Let's get those tasks done!</p>
</header>
<main>
    <div class="sidebar">
        <div class="nav-btn"><i class="ri-dashboard-2-line"></i><a href="../admin/dashboard.php">Dashboard </a></div>
        <div class="nav-btn"> <i class="ri-file-add-line"></i> <a href="createtask.php"> Create Task</a> </div>

        <div class="nav-btn" id="logout"> <i class="ri-logout-box-line"></i><a id="logout" href="../login/logout.php">Logout</a></div>
    </div>
    <div class="main-container">
        <section class="task-boxes">

            <a href="#" class="task-box all" data-status="all-chores">
                <i class="ri-list-unordered"></i>
                <p>All Tasks</p>
                <h2>
                    <?php
                                    echo numOfAllTasks();
                    ?>

                </h2>
            </a>

            <a href="#" class="task-box completed" data-status="completed">
                <i class="ri-check-double-line"></i>
                <p>Completed Tasks</p>
                <h2>
                    <?php
                                    echo numOfComplete();
                    ?>
                </h2>
            </a>

            <a href="#" class="task-box incomplete" data-status="incomplete">
                <i class="ri-time-line"></i>
                <p>Pending Tasks</p>
                <h2>
                    <?php
                                    echo numOfPending();
                    ?>
                </h2>
            </a>

            <a href="#" class="task-box in-progress" data-status="in-progress">
                <i class="ri-alarm-warning-line"></i>
                <p>In Progress</p>
                <h2>
                    <?php
                                    echo numOfInProgress();
                    ?>
                </h2>
            </a>
        </section>


        <section class="task-list">
            <section class="container">
                <div id="ma     in-list">
                    <h2>Task List</h2>
                    <!--                <button id="open-form-btn">Create task</button>-->
                    <table id="task-table">
                        <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Estimated Work Time</th>
                            <th>Expected Pay</th>
                            <th>Task Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                                            include '../functions/get_tasks_fxn.php';
                        ?>
                        </tbody>
                    </table>
                </div>


                <div class="form">
                    <form action="../action/assign_a_chore_action.php" method="POST" name="assign-task" id="assign-task">
                        <label for="chores">Assign task</label>
                        <select name="chores" id="chores">
                            <?php
                            $var_data=select_all_chores();
                            foreach ($var_data as $chore)
                                echo "<option value='".$chore['cid']."'>". $chore['chorename'] . "</option>";
                            ?>
                        </select>

                        <label for="assigned-person">Assign Person</label>
                        <select name="assigned-person" id="assigned-person">
                            <?php getPeople();?>
                        </select><br>

                        <label for="due-date">Due Date:</label>
                        <input type="date" name="due-date" id="due-date"><br>

                        <div id="button-cont">
                            <button id="submit-btn" type="submit" name="assign-task">Assign</button>
                            <button id="close-form">Close</button>
                        </div>

                    </form>
                </div>

            </section>

        </section>
    </div>

    <?php
    ;
    ?>
</main>
<script src="../js/admin-home-script.js"></script>
</body>
</html>
