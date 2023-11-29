<?php
$servername = "localhost"; 
$password = "12Pegasus3"; 
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database ($dbname).";
$conn->close();
?>
