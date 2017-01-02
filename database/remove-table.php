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
$sql = "DROP TABLE podrozoj_bezpiecznie";

if ($conn->query($sql) === TRUE) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . $conn->error;
}

$conn->close();
?>
