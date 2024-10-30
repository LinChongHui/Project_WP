<!DOCTYPE html>
<html>
<head>
    <title>HTML Search Form</title>
    <link rel="stylesheet" type="text/css" href="search.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="index.php" class="home-active"><i class='bx bxs-home'></i> Home</a></li>
            <li><a href="#input">Searching</a></li>
        </ul>
    </div>

    <div class="input">
        <form method="post" id="form">
            <input type="text" name="search" required id="text"/>
            <input type="submit" value="Search" id="submit"/>
        </form>

        <div class="output">
    <?php
    if (isset($_POST['search'])) {
        $query = $_POST['search'];
        require "search.php"; // Ensure search.php processes the query and returns $results

        if (count($results) > 0) {
            foreach ($results as $index => $r) {
                $link = "";
                $image = "";
                switch ($r) {
                    case "How To Make Millions Before Grandma Dies":
                        $link = "introduction1.php";
                        $image = "movies1.jpg";
                        break;
                    case "Inside Out 2":
                        $link = "introduction2.php";
                        $image = "movies2.jpg";
                        break;
                    case "The Garfield Movie: Trailer 2":
                        $link = "introduction3.php";
                        $image = "movies3.jpg";
                        break;
                    case "I Not Stupid 3":
                        $link = "introduction4.php";
                        $image = "movies4.jpg";
                        break;
                    case "Bad Boys: Ride Or Die":
                        $link = "introduction5.php";
                        $image = "movies5.jpg";
                        break;
                    case "Twilight Of The Warriors: Walled In":
                        $link = "introduction6.php";
                        $image = "movies6.jpg";
                        break;
                    case "Haikyu!!: The Dumpster Battle":
                        $link = "introduction7.php";
                        $image = "movies7.jpg";
                        break;
                    case "The Experts":
                        $link = "introduction8.php";
                        $image = "movies8.jpg";
                        break;
                    case "The Watchers":
                        $link = "introduction9.php";
                        $image = "movies9.jpg";
                        break;
                    case "Zim Zim Ala Kazim":
                        $link = "introduction10.php";
                        $image = "movies10.jpg";
                        break;
                    case "The Taste of Things":
                        $link = "introduction11.php";
                        $image = "coming1.jpg";
                        break;
                    case "Junkyard Dog":
                        $link = "introduction12.php";
                        $image = "coming2.jpg";
                        break;
                    case "Epic Tails":
                        $link = "introduction13.php";
                        $image = "coming3.jpg";
                        break;
                    case "The Animal Kingdom":
                        $link = "introduction14.php";
                        $image = "coming4.jpg";
                        break;
                    case "Houria":
                        $link = "introduction15.php";
                        $image = "coming5.jpg";
                        break;
                    case "A Chance To Win":
                        $link = "introduction16.php";
                        $image = "coming6.jpg";
                        break;
                    case "Sheriff: Narko Integriti":
                        $link = "introduction17.php";
                        $image = "coming7.jpg";
                        break;
                    case "Kingdom Of The Planet Of The Apes":
                        $link = "introduction18.php";
                        $image = "coming8.jpg";
                        break;
                    case "Detective Conan Vs. Kid The Phantom Thief":
                        $link = "introduction19.php";
                        $image = "coming9.jpg";
                        break;
                    case "Sinakagon":
                        $link = "introduction20.php";
                        $image = "coming10.jpg";
                        break;
                    default:
                        $link = "#";
                        $image = "default.jpg";
                        break;
                }
                echo "<div><a href='" . htmlspecialchars($link) . "'><img src='" . htmlspecialchars($image) . "' alt='" . htmlspecialchars($r) . "' style='width:100px;height:150px;'><br>" . htmlspecialchars($r) . "</a></div>";
            }
        } else {
            echo "<div>No results found</div>";
        }
    }
    ?>
</div>

    </div>

    <div class="footer">
        <div class="social">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-tiktok'></i></a>
        </div>
        <div class="copyright">
            <p>&#169; Boboboy All Right Reserved.</p>
        </div>
    </div>
</body>
</html>
