<?php
$name = $_POST['name'];
$email = $_POST['email']
$servername = 'localhost';
$username = 'formsubmitter';
$password = 'isubmitforms';
$dbname = 'email';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO table1 (name, email)
VALUES ($name, $email)";


$conn->close();
return true;
?>