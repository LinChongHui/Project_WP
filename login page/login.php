<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        // Hashing the password
        $pass_hash = md5($pass); // Note: Consider using stronger hashing methods like password_hash()

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass_hash'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username']; // Ensure consistent session variable name
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['loggedin'] = true;
            $_SESSION['role'] = 'user'; // Set user role (optional)
            header("Location: index.php"); // Redirect to your main page after login
            exit();
        } else {
            header("Location: login_index.php?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location: login_status.php");
    exit();
}
?>
