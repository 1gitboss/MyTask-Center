<?php

include "../functions/select_category_fxn.php";
include "../functions/get_a_task_fxn.php";

if (isset($_GET['jobId'])){
$ret_id= $_GET['jobId'];

$ret_task=get_a_task($ret_id);

if ($ret_task){


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/details-style.css">

    <title>Task Details</title>
</head>
<body>
<main>
    <header>
        <div class="row clearfix">
            <div class="col-1">

                <!--Logo-->
                <div id="logo">

                    <!--Logo that is shown on the banner-->
                    <img src=" ../assests/logo/logo-no-background-1.png" id="banner-logo" alt="Landing Page"/>
                    <!--End of Banner Logo-->

                    <!--The Logo that is shown on the sticky Navigation Bar-->
                    <img src=" ../assests/logo/logo-no-background-1.png" id="navigation-logo" alt="Landing Page"/>
                    <!--End of Navigation Logo-->
                    <nav id="nav-main">
                        <ul>
                            <li id="nav-back">
                                <a href="../view/overview.php">
                                    <i class="fa fa-chevron-left " aria-hidden="true"></i> Back</a>
                            </li>


                        </ul>
                    </nav>
                </div>
                <!--End of Logo-->


                <!--Main Navigation-->

                <!--End of Main Navigation-->

                <div id="nav-trigger"><span></span></div>
                <nav id="nav-mobile"></nav>

            </div>

    </header>

        <div class="info-wrapper">
        <div class="container">
            <h1> Task Title </h1>
            <h3><?php echo $ret_task['Title'] ?> </h3>

            <h1> Location:</h1>
            <h3><?php echo $ret_task['Location'] ?> </h3>


            <h1> Pay Expected:</h1>
            <h3> Ghc <?php echo $ret_task['PayExpected'] ?> </h3>

            <h1> More Details:</h1>
            <h3><?php echo $ret_task['Description'] ?> </h3>

            <h1> Task's Current Status:</h1>
            <h3> <?php echo $ret_task['StatusName'] ?> </h3>

            <h1> Estimated Work Time:</h1>
            <h3><?php echo $ret_task['EstimatedWorkTime'] ?> hrs</h3>

            <br>
            <h4>Interested?</h4> <a href="mailto: <?php echo $ret_task['email']?>" target="_blank">
                <button class="email-btn"> Email And Apply</button> </a>
        </div>

    </div>

</main>



</body>
</html>
<?php
    }else{
        header("Location: ../view/overview.php");
        exit();
    }

} else{
    $error= "No Id Found.";
    header("Location: ../view/overview.php?error=".urlencode($error));
}
?>