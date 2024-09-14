<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get sign-up details from form
// $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['passwd'];

// Hash password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert sign-up details into database
$sql = "INSERT INTO users (email, passwd)
VALUES ('$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Sign-up successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>