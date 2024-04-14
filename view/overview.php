<?php
 include "../functions/overview_fxn.php";
 include "../functions/homepage_fxn.php";

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Tasks </title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/overview-style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="../css/namari-color2.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="../css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<!--<div id="preloader">-->
<!--    <div id="status" class="la-ball-triangle-path">-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--    </div>-->
<!--</div>-->
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
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

                    </div>
                    <!--End of Logo-->


                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="#banner">Home</a>
                            </li>
                            <li>
                                <a href="#tasks">Tasks</a>
                            </li>
                            <li id="nav-element">
                                <a href="../admin/dashboard.php">Dashboard</a>
                            </li>


                        </ul>
                    </nav>
                    <!--End of Main Navigation-->


                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h2>We are looking to connect the right people,
                        <span><em>to the right tasks.</em></span></h2>
                </div>

                <!--Call to Action-->
                <a href="#tasks" class="button">FIND YOUR NEXT TASK</a>
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">

        <!--Introduction-->
        <section id="tasks" class="introduction scrollto">

            <div class="row clearfix">

                <div class="row clearfix">
                    <div class="job-listings">
                        <div class="job-header-section">
                            <div class="available-jobs">
                                <h2>
                                    <span id="job-counter">
                                        <?php echo numTotal(); ?>
                                    </span> tasks openings across the country in different fields.
                                </h2>
                            </div>
                            <!--                <div class="filter-search">-->
                            <!--                    <div class="filter">-->
                            <!--                        <div class="filter-class">-->
                            <!--                            <p>Filter By:</p>-->
                            <!--                            <select name="categories" id="categories" class="categories" >-->
                            <!--                                <option value="0">All Categories</option>-->
                            <!--                                <option value="1">Cleaning</option>-->
                            <!--                                <option value="2">Outdoor</option>-->
                            <!--                                <option value="3">Manual work</option>-->
                            <!--                            </select>-->
                            <!--                        </div>-->
                            <!--                        <div class="search-holder">-->
                            <!--                            <input type="search" placeholder="Search by title">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <hr>-->
                            <!--                </div>-->
                            <div class="category-holder">
                                <div><h2 class="category-name">Office <span>(<?php echo numOffice() ?>)</span></h2></div>
                                <div class="task">

                                    <?php
                                        getAllOffice();
                                    ?>

                                </div>
                            <div class="category-holder">
                                <div><h2 class="category-name">Cleaning <span>(<?php echo numCleaning() ?>)</span></h2></div>
                                <div class="task">

                                    <?php
                                        getAllCleaning();
                                    ?>

                                </div>
                            <div class="category-holder">
                                <div><h2 class="category-name">Outdoor <span>(<?php echo numOutdoor() ?>)</span></h2></div>
                                <div class="task">

                                    <?php
                                        getAllOutdoor();
                                    ?>

                                </div>
                            <div class="category-holder">
                                <div><h2 class="category-name">Assistance <span>(<?php echo numAssistance() ?>)</span></h2></div>
                                <div class="task">

                                    <?php
                                        getAllAssistance();
                                    ?>

                                </div>
                            <div class="category-holder">
                                <div><h2 class="category-name">Other<span>(<?php echo numOther() ?>)</span></h2></div>
                                <div class="task">

                                    <?php
                                        getAllOther();
                                    ?>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                </div>




        </section>
        <!--End of Introduction-->




        <!--Content Section-->
</main>
    <!--End Main Content Area-->


    <!--Footer-->
    <footer id="landing-footer" class="clearfix">
        <div class="row clearfix">

            <p id="copyright" class="col-2">Made with love by <a href="https://www.shapingrain.com">ShapingRain</a></p>

        </div>
    </footer>
    <!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>