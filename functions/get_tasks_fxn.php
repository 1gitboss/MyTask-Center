<?php
include_once "../actions/get_all_tasks_action.php";

$var_data =getTasks();

foreach ($var_data as $task) {
    echo "<tr>";
    echo "<td>{$task['Title']}</td>";
    echo "<td>{$task['CategoryName']}</td>";
    echo "<td>{$task['Location']}</td>";
    echo "<td>{$task['Description']}</td>";
    echo "<td>{$task['EstimatedWorkTime']}</td>";
    echo "<td>{$task['PayExpected']}</td>";
    echo "<td>{$task['StatusName']}</td>";


    echo "<td>";

    // Delete icon
    echo "<a href='../admin/edit_task_view.php?jobId={$task['JobID']}'><i class='ri-edit-2-line'></i></a>";
    echo "<a class='restricted-icon' href='../actions/delete_task_action.php?jobId={$task['JobID']}'><i class='ri-delete-bin-line'></i></a>";

    echo "</td>";
    echo "</tr>";
}
