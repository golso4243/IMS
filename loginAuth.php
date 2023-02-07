<?php

// Connect to Database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "ims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate User Credentials against Database
function authenticate_user($conn, $username, $password) {
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

// Result
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticate_user($conn, $username, $password)) {
        // successful login, redirect to Dashboard
        header("Location: http://localhost/ims/dashboard.php");
        exit;
    } else {
        header("Location: http://localhost/ims/loginFail.php");
    }
}

?>
