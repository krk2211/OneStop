<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "onestop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO checkout VALUES ('iDON', 10, 100)";
//VALUES('aditi', 12, 'f', 9999)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
