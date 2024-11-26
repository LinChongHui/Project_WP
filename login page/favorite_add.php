<?php
// Start session to get user information
session_start();
include "db_conn.php";

// Check user role to determine access rights
if ($_SESSION['role'] !== 'user') {
    // Redirect or show error message for unauthorized access
    echo '<script>';
    echo 'alert("Please Log In !!");';
    echo '</script>';
    
    // Redirect after the alert is shown
    echo '<script>';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

// Ensure user is logged in
if (!isset($_SESSION['username'])) {
    die("User not logged in");
}

// Get the logged-in username
$username = $_SESSION['username'];

// Prepare SQL statement to get user ID
$stmt = $conn->prepare("SELECT userID FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($userID);
$stmt->fetch();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['movieID'])) {
    $movieID = $_POST['movieID'];

    // Check if the movie is already in the favorite list for this user
    $stmt = $conn->prepare("SELECT COUNT(*) FROM favorite_movies WHERE userID = ? AND movieID = ?");
    $stmt->bind_param("ii", $userID, $movieID);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        // Movie already exists in favorite list for this user
        echo '<script>';
        echo 'alert("This movie is already in your favorite list.");';
        echo 'window.location.href = "favorite_list.php";'; // Redirect to favorite_list.php or another appropriate page
        echo '</script>';
        exit; // Ensure script stops here
    } else {
        // Add the movie to the favorite list
        $movieID = $_POST['movieID'];
        $stmt = $conn->prepare("INSERT INTO favorite_movies (userID, movieID) VALUES (?, ?)");
        $stmt->bind_param("ii", $userID, $movieID);
        if ($stmt->execute()) {
            echo '<script>';
            echo 'alert("This movie is added in your favorite list.");';
            echo '</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();

// Redirect to favorite_list.php
header("Location: favorite_list.php");
exit();
?>
