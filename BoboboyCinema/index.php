<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="viewport" content="width=device-width,inital-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Boboboy</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="index_n.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    
    <body>
<?php
session_start(); // Start or resume the session

// Check if user is logged in and in 'user' mode
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    // User is in 'user' mode
    // Display user-specific navigation elements
    echo '<div class="circle">
              <div id="nav-container" class="hidden">
                  <div class="nav-element" title="Logout"><a href="logout.php"><i class="bx bxs-log-out"></i></a></div>
                  <div class="nav-element" title="Favorite List"><a href="favorite_list.php"><i class="bx bx-list-ul"></i></a></div>
              </div>
              <button id="nav-toggle" class="nav-toggle">+</button>
              <script src="index_n.js"></script>
          </div>';
} else {
    // User is not logged in or not in 'user' mode
    // Display default navigation elements
    echo '<div class="circle">
              <div id="nav-container" class="hidden">
                  <div class="nav-element" title="Sign In"><a href="signup.php"><i class="bx bxs-log-in"></i></a></div>
              </div>
              <button id="nav-toggle" class="nav-toggle">+</button>
              <script src="index_n.js"></script>
          </div>';
}
?>        
    
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie-play' ></i> Boboboy
        </a>

        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        <div class="utility-links">
            
        <?php
        // Check if user is logged in and in 'user' mode
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
            // User is in 'user' mode
            // Proceed with user-specific functionality or display
            echo '<a href="logout.php" class="btn">Logout</a>';
        } else {
            // Redirect to login page or show appropriate message
            echo '<a href="signup.php" class="btn">Sign In</a>';
        }
        ?>

        <a href="http://localhost/home page/login page/search_index.php" class="search">
            <i class='bx bx-search-alt'></i>
        </a>
    </div>
    </header>

        <!-- Home -->           
        <section class="home swiper" id="home">
            
            <div class="swiper-wrapper">
                <!-- Box 1-->
                <div class="swiper-slide conatiner">
                    <img src="home1.jpg" alt="">
                    <div class="home-text">
                        <span></span>
                        <h1>How to make millions <br> before grandma dies</h1>
                        <a href="introduction1.php" class="btn">View details</a>
                    </div>
                    <a href="https://www.youtube.com/embed/HrVX_nHNIUA?si=h-v9qxwCfyOq958X" class="play" target="_blank">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>

            <!-- Box 2-->
                <div class="swiper-slide conatiner">
                    <img src="home2.jpeg" alt="">
                    <div class="home-text">
                        <span></span>
                        <h1>Inside Out 2<br> </h1>
                        <a href="introduction2.php" class="btn">View details</a>
                    </div>
                    <a href="https://www.youtube.com/embed/LEjhY15eCx0?si=VSw2Eik9wslp0q9X" class="play" target="_blank">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            <!-- Box 3-->
                <div class="swiper-slide conatiner">
                    <img src="home3.jpg" alt="">
                    <div class="home-text">
                        <span></span>
                        <h1>The Garfield Movie<br> Trailer 2</h1>
                        <a href="introduction3.php" class="btn">View details</a>
                    </div>
                    <a href="https://www.youtube.com/embed/sDsgOafZx_M?si=mG9BNlXaw0PeO1Yw" class="play" target="_blank">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            </div>

              <div class="swiper-pagination"></div>

        </section>
        <!--Movies-->
        <section class="movies" id="movies">
            <h2 class="heading">Opening This Week</h2>
            <!-- Movies Conatiner-->
             <div class="movies-container">
                
                <!-- Box 1-->
                <div class="box">
                    <div class="box-img">
                        <a href="introduction1.php"><img src="movies1.jpg"></a>
                    </div>
                    <h3>How To Make Millions <br> Before Grandma Dies</h3>
                    <span>127 min | Life </span>
                </div>
                 
                <!-- Box 2-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction2.php"><img src="movies2.jpg"></a>
                    </div>
                    <h3>Inside Out 2 </h3> <br>
                    <span>95 min | Adventure</span>
                </div>
                 
                <!-- Box 3-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction3.php"><img src="movies3.jpg"></a>
                    </div>
                    <h3>The Garfield Movie: <br> Trailer 2</h3>
                    <span>101 min | Animation</span>
                </div>

                 <!-- Box 4-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction4.php"><img src="movies4.jpg"></a>
                    </div>
                    <h3>I Not Stupid 3</h3> <br>
                    <span>133 min | Life</span>
                </div>

                 <!-- Box 5-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction5.php"><img src="movies5.jpg"></a>
                    </div>
                    <h3>Bad Boys: <br> Ride or Die</h3>
                    <span>115 min | Action</span>
                </div>

                 <!-- Box 6-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction6.php"><img src="movies6.jpg"></a>
                    </div>
                    <h3>Twilight Of The <br>Warriors: Walled In</h3>
                    <span>126 min | Adventure</span>
                </div>

                 <!-- Box 7-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction7.php"><img src="movies7.jpg"></a>
                    </div>
                    <h3>Haikyu!!: The<br> Dumpster Battle</h3>
                    <span>100 min | Animation</span>
                </div>

                 <!-- Box 8-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction8.php"><img src="movies8.jpg"></a>
                    </div>
                    <h3>The Experts</h3> <br>
                    <span>121 min | Action</span>
                </div>

                 <!-- Box 9-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction9.php"><img src="movies9.jpg"></a>
                    </div>
                    <h3>The Watchers</h3> <br>
                    <span>102 min | Horror</span>
                </div>

                 <!-- Box 10-->
                 <div class="box">
                    <div class="box-img">
                        <a href="introduction10.php"><img src="movies10.jpg"></a>
                    </div>
                    <h3>Zim Zim Ala Kazim</h3> <br>
                    <span>77 min | Drama</span>
                </div>

            </div>          
        </section>

        <!--Coming-->
        <section class="coming" id="coming">
            <h2 class="heading">Coming Soon</h2>
            <!--Coming Container-->
            <div class="coming-container swiper">
                <div class="swiper-wrapper">
                    <!-- Box 1-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction11.php"><img src="coming1.jpg"></a>
                    </div>
                    <h3>The Taste of Things</h3> <br>
                    <span>136 min | Drama</span>
                </div>
                 
                <!-- Box 2-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction12.php"><img src="coming2.jpg"></a>
                    </div>
                    <h3>Junkyard Dog</h3> <br>
                    <span>93 min | Drama</span>
                </div>
                 
                <!-- Box 3-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction13.php"><img src="coming3.jpg"></a>
                    </div>
                    <h3>Epic Tails</h3> <br>
                    <span>96 min | Animation</span>
                </div>

                 <!-- Box 4-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction14.php"><img src="coming4.jpg"></a>
                    </div>
                    <h3>The Animal Kingdom</h3> <br>
                    <span>128 min | Fantasy</span>
                </div>

                 <!-- Box 5-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction15.php"><img src="coming5.jpg"></a>
                    </div>
                    <h3>Houria</h3><br>
                    <span>99 min | Drama</span>
                </div>

                 <!-- Box 6-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction16.php"><img src="coming6.jpg"></a>
                    </div>
                    <h3>A Chance to Win</h3><br>
                    <span>97 min | Comedy</span>
                </div>

                 <!-- Box 8-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction17.php"><img src="coming7.jpg"></a>
                    </div>
                    <h3>Sheriff</h3><br>
                    <span>133 min | Action</span>
                </div>

                 <!-- Box 9-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction18.php"><img src="coming8.jpg"></a>
                    </div>
                    <h3>Kingdom Of The <br>Planet Of The Apes</h3>
                    <span>144 min | Action</span>
                </div>

                 <!-- Box 9-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <a href="introduction19.php"><img src="coming9.jpg"></a>
                    </div>
                    <h3>Detective Conan Vs. Kid The Phantom Thief</h3>
                    <span>82 min | Animation</span>
                </div>

                    <!-- Box 10-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <a href="introduction20.php"><img src="coming10.jpg"></a>
                        </div>
                        <h3>Sinakagon: Semangat Padi Tak kan Lenyap</h3>
                        <span>123 min | Mystery</span>
                    </div>

            </div>
            </div>
        </section>

        <!--Newsletter-->
        <section class="newsletter" id="newsletter">
            <h2>Subscribe To Get <br> Newsletter</h2>
            <form action="">
                <input type="email" class ="email" placeholder=" Enter Email..." required>
                <input type="submit" value ="Subscribe" class="btn" >
            </form>
        </section>

        <!--Footer-->
        <section class="footer">
            <a href="#" class="logo">
                <i class="bx bxs-movie"></i>Movies
            </a>
            <div class="social">
                <a href=""><i class='bx bxl-facebook' ></i></a>
                <a href=""><i class='bx bxl-twitter' ></i></a>
                <a href=""><i class='bx bxl-instagram' ></i></a>
                <a href=""><i class='bx bxl-tiktok' ></i></a>
            </div>
        </section>
        <!-- Copyright-->
         <div class="copyright">
            <p> &#169; Boboboy All Right Reserved.</p>
         </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Link To Custom-->
         <script src="index.js"></script>
    </body>
</html>