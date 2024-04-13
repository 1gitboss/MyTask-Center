<?php
include_once "../actions/get_all_tasks_action.php";

//all assignments
function numOfAllTasks() {
    $tasks = getTasks() ;

    return count($tasks);
}

function numOfPending(){
    $tasks = getTasksPending() ;
    return count($tasks);
}
function numOfComplete(){
    $tasks = getTasksCompleted();

    return count($tasks);
}

function numOfInProgress(){
    $tasks = getTasksInProgress() ;

    return count($tasks);
}

