<?php
include_once "../actions/get_all_tasks_action.php";

//all assignments
function numOutdoor() {
    $tasks = getOutdoor() ;
    return count($tasks);
}
function numAssistance() {
    $tasks = getAssistance() ;

    return count($tasks);
}
function numOffice(){
    $tasks = getOffice() ;
    return count($tasks);
}
function numCleaning(){
    $tasks = getCleaning();

    return count($tasks);
}

function numOther(){
    $tasks = getOther() ;

    return count($tasks);
}

function getAllOther() {
    $tasks = getOther() ;
    foreach ($tasks as $task) {
        echo "<table>";
        echo "<tr>";
        echo "<td>{$task['Title']}</td>";

        echo "<td>{$task['Location']}</td>";

        echo "<td>> {>} </td>";
        echo "</tr>";
        echo "</table>";


    }
}function getAllOffice() {
    $tasks = getOffice() ;
    foreach ($tasks as $task) {
        echo "<table>";
        echo "<tr>";
        echo "<td>{$task['Title']}</td>";

        echo "<td>{$task['Location']}</td>";

        echo "<td>> {>} </td>";
        echo "</tr>";
        echo "</table>";


    }
}function getAllOutdoor() {
    $tasks = getOutdoor() ;
    foreach ($tasks as $task) {
        echo "<table>";
        echo "<tr>";
        echo "<td>{$task['Title']}</td>";

        echo "<td>{$task['Location']}</td>";

        echo "<td>> {>} </td>";
        echo "</tr>";
        echo "</table>";


    }
}function getAllCleaning() {
    $tasks = getCleaning() ;
    foreach ($tasks as $task) {
        echo "<table>";
        echo "<tr>";
        echo "<td>{$task['Title']}</td>";

        echo "<td>{$task['Location']}</td>";

        echo "<td>> {>} </td>";
        echo "</tr>";
        echo "</table>";


    }
}function getAllAssistance() {
    $tasks = getAssistance() ;
    foreach ($tasks as $task) {
        echo "<table>";
        echo "<tr>";
        echo "<td>{$task['Title']}</td>";

        echo "<td>{$task['Location']}</td>";

        echo "<td>> {>} </td>";
        echo "</tr>";
        echo "</table>";


    }
}