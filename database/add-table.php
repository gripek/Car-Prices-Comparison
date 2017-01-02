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

// sql to create table (backup)
$sql = "CREATE TABLE podrozoj_bezpiecznie (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
opis VARCHAR(500),
cena INT 
)";

// sql to create table (backup)
//$sql = "CREATE TABLE wyposazenie (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP
//)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
