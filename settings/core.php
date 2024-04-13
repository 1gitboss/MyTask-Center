<?php

session_start();

function checkLogin() {
    if (!isset($_SESSION['user_id'])){
        header('Location: ../login/login.php');
        die();
    }

}
checkLogin();

function authorize(){
    if (!isset($_SESSION['role_id'])){
        return false;
    }else if($_SESSION['role_id']==3)
    {
        header('Location: ../view/homepage.php');

        exit();
    } else{
        header('Location: ../admin/homepage.php');
    }
    return $_SESSION['role_id'] ;
}
//

//function noDeletion (){
//    // Check if the user is authorized to see the icon
//    if ($_SESSION['role_id'] !== 1) {
//        // User is not authorized, do not display the icon
//        // For example, you can use CSS to hide the icon
//        echo '<style>.restricted-icon { display: none; }</style>';
//    }else{
//        echo '<style>.restricted-icon { display: inherit; }</style>';}
//    $keys = $_SESSION['role_id'];
//
//// Print the array keys
//    print_r($keys);
//
//// Display the icon
//
//
//}
//noDeletion();


?>