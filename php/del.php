

<?php
require "../login/loginheader.php";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "onestop";
$name1="A";
$price1="B";
$quantity1="C";
$names =  $_SESSION['username'];


echo "Welcome, " . $_SESSION['username'];
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "DELETE FROM checkout where user ='".$names."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
