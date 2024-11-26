<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheriff: Narko Integriti</title>
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
    </div>
    
    <div class="poster">
        <img src="coming7.jpg" alt="">
        <div>
            <form method="post" action="favorite_add.php">
            <input type="hidden" name="movieID" value="17"> 
                <button type="submit">Add to Favorites</button>
            </form>
        </div>

    </div>
    
    <div class="main" id="main">
        <h1><span>Sheriff: Narko Integriti</span></h1>
        <h2>About the Movie : </h2>
        <p>
            "Nazri, an officer from the Narcotics Department, faces traumatic problems after losing his lover 
            during an undercover mission. The drug syndicate led by Tony Ifrit often evades the law during the 
            judicial process. Nazri decides to resolve the issue secretly himself and earns the media nickname 
            "Meth Killer." When the "Meth Killer" case gains public attention, Sheriff, an officer from the Integrity 
            Department is assigned to solve it as it is suspected that the Meth Killer might be hiding among the ranks 
            of the Narcotics Department itself. Sheriff begins his investigation and becomes intrigued as he senses the 
            potential of every member to be the Meth Killer. The situation becomes tense when Nazri and Sheriff find themselves
             working in the same department. There is a traitor with the police force working under the Meth Killer, as Sheriff 
             gradually uncovers the secrets one by one.
            "
        </p>
        <p><strong>Release Date:</strong> 18 Apr 2024</p>
        <p><strong>Director:</strong> Syafiq Yusof</p>
        <p><strong>Cast:</strong>  Zul Ariffin, Syafiq Kyle, Azira Shafinaz, Aaron Aziz, Elizabeth Tan</p>
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
            <a href="https://www.youtube.com/embed/gG3UbB_e_UY?si=lvJnDgKH8JToBoE1" class="watch-trailer" target="_blank">Watch Trailer</a>
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

<!--
  <h1>How To Make Millions <br> Before Grandma Dies</h1>
                    <h2>About the Movie : </h2>
                    <p>
                        "A young man quits his job to look after his dying grandmother and it becomes a 
                        journey of complex family relationships, sacrifices and the pursuit of happiness."
                    </p>
                    <p><strong>Release Date:</strong> July 30, 2024</p>
                    <p><strong>Director:</strong> Pat Boonnitipat</p>
                    <p><strong>Cast:</strong> Putthipong Assaratanakul, Usha Seamkhum, Tontawan Tantivejakul</p>
                </div>
            </div>
            <div class="commands">
                        <h2>Commands:</h2>
                        <input type="text" id="command-input" placeholder="Enter your command...">
                        <button onclick="executeCommand()">Execute</button>
                    </div>
            <div class="trailer">
                <button onclick="playTrailer()">Watch Trailer</button><br><br>
                <iframe id="trailer" src="" frameborder="0" allowfullscreen></iframe>
            </div>
-->
                  
           