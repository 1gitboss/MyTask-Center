<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/overview.css">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>
    <title>MyTask Center</title>
</head>
<body>
<div class="nav-container">
    <nav>
        <div class="header-container">
            <div class="logo">
                <!-- Logo goes here -->
                <a href="index.php"><img height="50px"  src="../assests/logo/logo-no-background-1.png" alt="logo"></a>
            </div>

            <ul id="menu">
                <li><a href="#hero-section">HOME</a></li>
                <li><a href="#section-2">ABOUT US</a></li>
                <li><a href="#section-3">OUR CUSTOMERS</a></li>
                <li><a class="signup" href="login/register.php"><button>SEE JOBS</button></a></li>
            </ul>
        </div>
    </nav>
</div>
<div id="opening-section">
    <div class="opening-text-wrap">
        <div id="opening-text">
            <p>We are looking to connect the right people,
                <span><em>to the right jobs.</em></span></p>
        </div>
        <div id="button-wrapper">
            <button class="action-btn">Find Your Next Job</button>
        </div>

    </div>

    <div id="opening-pic">
        <img src="../assests/images/comfy-white-wing-chair-room-with-gray-wall.jpg"
             srcset sizes="(min-width: 1160px) 520px, (min-width: 900px) 575px,
              (min-width: 600px) 450px, (min-width: 480px) 600px, 480px" width="500px" alt="empty chair">
    </div>
</div>

<div class="job-listings">
    <div class="job-header-section">
        <div class="available-jobs">
            <span id="job-counter">70</span> tasks openings across the country in different fields.
        </div>
        <div class="filter-search">
            <div class="filter">
                <div class="filter-class">
                    <p>Filter By:</p>
                    <select name="categories" id="categories" class="categories" >
                        <option value="0">All Categories</option>
                        <option value="1">Cleaning</option>
                        <option value="2">Outdoor</option>
                        <option value="3">Manual work</option>
                    </select>
                </div>
                <div class="search-holder">
                    <input type="search" placeholder="Search by title">
                </div>
            </div>
            <hr>
        </div>
        <div class="category-holder">
            <div><h2 class="category-name">Garden Work <span>(2)</span></h2></div>
            <div class="task">
                <table>
                    <tr>
                        <td>Wash cars</td>
                        <td>Dansoman</td>
                        <td>></td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="task">
                <table>
                    <tr onclick="window.location='#'">
                        <td>Wash cars</td>
                        <td>Dansoman</td>
                        <td>></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>


</body>
</html>
<!--Food preparation - especially fast food-->
<!--Janitorial services-->
<!--Cleaning hotel rooms-->
<!--Driving-->
<!--Cashiers-->
<!--Stocking shelves-->
<!--Lawn mowing-->
<!--Assistance-->