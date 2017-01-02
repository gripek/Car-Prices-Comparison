<?php
$servername = "localhost";
$username = "otoleasing";
$password = "qwe123";
$dbname = "skoda_octavia_combi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "DROP DATABASE skoda_octavia_combi";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}

$conn->close();
?>
