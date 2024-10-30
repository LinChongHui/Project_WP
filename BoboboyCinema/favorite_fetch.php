<?php
// Start session to get user information
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ensure user is logged in
if (!isset($_SESSION['username'])) {
    die("User not logged in");
}

// Get the logged-in username
$username = $_SESSION['username'];

// Database credentials
$servername = "localhost";
$username_db = "linchonghui";
$password_db = "linchonghui";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to get user ID
$stmt = $conn->prepare("SELECT userID FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($userID);
$stmt->fetch();
$stmt->close();

// Fetch favorite movies from the database for the logged-in user
$sql = "SELECT movies.movieID, movies.title FROM favorite_movies
        INNER JOIN movies ON favorite_movies.movieID = movies.movieID
        WHERE favorite_movies.userID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();

$movies = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $movieDetails = getMovieDetails($row['movieID'], $row['title']);
        array_push($movies, $movieDetails);
    }
}
$stmt->close();
$conn->close();

// Function to get movie details based on the title
function getMovieDetails($movieID) {
    switch ($movieID) {
        case 1:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies1.jpg',
                "title" => "How To Make Millions Before Grandma Dies",
            );
        case 2:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies2.jpg',
                "title" => "Inside Out 2",
            );
        case 3:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies3.jpg',
                "title" => "The Garfield Movie: Trailer 2",
            );
        case 4:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies4.jpg',
                "title" => "I Not Stupid 3",
            );
        case 5:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies5.jpg',
                "title" => "Bad Boys: Ride Or Die",
            );
        case 6:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies6.jpg',
                "title" => "Twilight Of The Warriors: Walled In",
            );
        case 7:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies7.jpg',
                "title" => "Haikyu!!: The Dumpster Battle",
            );
        case 8:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies8.jpg',
                "title" => "The Experts",
            );
        case 9:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies9.jpg',
                "title" => "The Watchers",
            );
        case 10:
            return array(
                "movieID" => $movieID,
                "poster" => 'movies10.jpg',
                "title" => "Zim Zim Ala Kazim",
            );
        case 11:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming1.jpg',
                "title" => "The Taste of Things",
            );
        case 12:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming2.jpg',
                "title" => "Junkyard Dog",
            );
        case 13:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming3.jpg',
                "title" => "Epic Tails",
            );
        case 14:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming4.jpg',
                "title" => "The Animal Kingdom",
            );
        case 15:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming5.jpg',
                "title" => "Houria",
            );
        case 16:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming6.jpg',
                "title" => "A Chance To Win",
            );
        case 17:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming7.jpg',
                "title" => "Sheriff: Narko Integriti",
            );
        case 18:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming8.jpg',
                "title" => "Kingdom Of The Planet Of The Apes",
            );
        case 19:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming9.jpg',
                "title" => "Detective Conan Vs. Kid The Phantom Thief",
            );
        case 20:
            return array(
                "movieID" => $movieID,
                "poster" => 'coming10.jpg',
                "title" => "Sinakagon",
            );
        default:
            return array(
                "movieID" => $movieID,
                "title" => "Unknown",
                "poster" => 'default.jpg',
                "description" => "No details available",
                "director" => "Unknown",
                "year" => "Unknown",
            );
    }
}


// Output movie details as JSON
header('Content-Type: application/json');
echo json_encode($movies);
?>
