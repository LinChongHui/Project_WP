<?php
// Start session to get user information
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['movieID'])) {
    $movieID = $_POST['movieID'];

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

    // Prepare SQL statement to delete favorite movie
    $stmt = $conn->prepare("DELETE FROM favorite_movies WHERE userID = ? AND movieID = ?");
    $stmt->bind_param("ii", $userID, $movieID);

    if ($stmt->execute()) {
        echo "Movie deleted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method or movie ID not provided.";
}
?>
