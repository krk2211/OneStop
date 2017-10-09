

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



// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//$get_stu="select * from item where name='iphone'";
$get_stu="select * from item where name='".$_POST['name']."'";
$run_stu=mysqli_query($con,$get_stu);
while($row_stu=mysqli_fetch_array($run_stu))
{
$GLOBALS['name1']=$row_stu['name'];

$GLOBALS['price1']=$row_stu['price'];
$GLOBALS['quantity1']=1;
 echo "Welcome, " . $names;
//echo "string";
//echo $names;
}
//alert("Your Item has been added to cart!");


//echo "string";

 //$sql = "INSERT INTO checkout VALUES ('".$_POST['name1']."'," . $_POST['price1'].", ".$_POST['quantity1'].")";
//$sql = "INSERT INTO checkout VALUES ('$name',$price1,$quantity1)";
//$sql = "INSERT INTO checkout VALUES ('".$name1."'," . $price1.", ".$quantity1.")";
// echo $_POST['name'];
// echo "string";
// echo "Welcome, " . $_SESSION['username'];
// echo "string";
// echo $names;

// echo $name1;
// echo "string";
// echo $price1;
// echo "string";
// echo $quantity1;
$con->close();
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO checkout VALUES ('".$name1."'," . $price1.", ".$quantity1.", '".$names."')";
//$sql = "INSERT INTO checkout VALUES ('iDON', 10, 100)";
//VALUES('aditi', 12, 'f', 9999)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
