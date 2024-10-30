<?php
$servername = "localhost";
$username = "linchonghui";
$password = "linchonghui";
$dbname = "favourites";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title FROM favorite_movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div>Favorite Movies:</div>";
    while($row = $result->fetch_assoc()) {
        echo "<div>" . $row["fname"] . "</div>";
    }
} else {
    echo "<div>No favorite movies found</div>";
}

$conn->close();
?>
