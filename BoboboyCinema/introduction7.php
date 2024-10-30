<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haikyu!!: The Dumpster Battle</title>
    <link rel="stylesheet" href="introduction.css">
    <link rel="stylesheet" href="index_n.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="index.php" class="home-active"><i class='bx bxs-home' ></i> Home</a></li>
            <li><a href="#main">Details</a></li>
            <li><a href="#trailer">Trailer</a></li>
            <li><a href="#comments"> Comments</a></li>
         </ul>
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
                  <div class="nav-element" title="Profile"><a href="profile.php"><i class="bx bxs-user"></i></a></div>
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
        <a href=""></a>
    </div>
    
    <div class="poster">
        <img src="movies7.jpg" alt="">
        <div>
            <form method="post" action="favorite_add.php">
            <input type="hidden" name="movieID" value="7"> 
                <button type="submit">Add to Favorites</button>
            </form>
        </div>

    </div>
    
    <div class="main" id="main">
        <h1><span>Haikyu!!: The Dumpster Battle</span></h1>
        <h2>About the Movie : </h2>
        <p>
            "Shoyo Hinata began playing volleyball after seeing the "small giants" who 
            played the sport when he was in elementary school. He suffers a crushing defeat in his 
            first and last tournament in middle school at the hands of his rival Tobio Kageyama. So, 
            Shoyo joins Kurasuno High School`s volleyball team, vowing revenge against Tobio. However, 
            Tobio is also on Kurasuno`s team. The former rivals form a legendary combo with Shoyo`s mobility 
            and Tobio`s precision ball-handling."
        </p>
        <p><strong>Release Date:</strong>16 May 2024</p>
        <p><strong>Director:</strong> Susumu Mitsunaka</p>
        <p><strong>Cast:</strong> Ayumu Murase, Yuki Kaji, Kaito Ishikawa</p>
        <div class="rating">
            <span class="star" data-value="1">&#9733;</span>
            <span class="star" data-value="2">&#9733;</span>
            <span class="star" data-value="3">&#9733;</span>
            <span class="star" data-value="4">&#9733;</span>
            <span class="star" data-value="5">&#9733;</span>
        </div>
        <script src="rating.js"></script>
    </div>

    <div class="trailer" id="trailer">

        <div class="watch-trailer">
            <a href="https://www.youtube.com/embed/H51vnZt1ctU?si=m62gvMxVBAu8zQLM" class="watch-trailer" target="_blank">Watch Trailer</a>
        </div>

        <div class="comments" id="comments">
            <h2>Comments:</h2>
            <input type="text" id="comment-input" placeholder="Enter your comment...">
            <button onclick="executeComment()">Execute</button>
        </div>
        <div id="comment-output" class="output"></div>
        <script src="comment.js"></script>
    </div>

    <div class="footer">
        
        <div class="social">
            <a href=""><i class='bx bxl-facebook' ></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href=""><i class='bx bxl-instagram' ></i></a>
            <a href=""><i class='bx bxl-tiktok' ></i></a>
        </div>

        <div class="copyright">
            <p> &#169; Boboboy All Right Reserved.</p>
         </div>

    </div>

</body>
