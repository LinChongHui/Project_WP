<?php
// Connect to the database
$sname = "localhost";
$uname = "linchonghui";
$password = "linchonghui";
$db_name = "user_db";

$conn = new mysqli($sname, $uname, $password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the query parameter from the POST request
$query = isset($_POST['search']) ? $_POST['search'] : '';

// Write query for all movies
$sql = "SELECT title FROM movies WHERE title LIKE '%$query%'";

// Make query & get result
$result = $conn->query($sql);

// Fetch the resulting rows as an array
$results = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $results[] = $row['title'];
    }
}

// Close the connection
$conn->close();

// No need to echo the results as JSON, just let the main script use $results
?>
