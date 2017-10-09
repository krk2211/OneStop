<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="jquery-3.2.1.min.js"></script>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<head>
    <link rel="stylesheet" href="styles.css">
<title>OneStop</title>
</head>
<body>

    <script>
    // Accordion
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    function add()
    {	alert("Your Item has been added to cart!");
        $.post("buy.php",
        {   name: 'solo'                            //rep name
        },function(data,status)
        {
            console.log(data+status);
        }
    );


    }

    </script>

<br />
<div id = "Heading"><b>OneStop</b></div>
<br>
<!--pre>
                                    <a href="Home.html">About</a>                              <a href="Registration.html">Register</a>                           <a href="Contact.html">Contact us</a>
</pre-->
<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-xs-3'>

        </div>
        <div class = 'col-xs-3 text-center'>
            <a href = 'Home.html'>About</a>
        </div>
        <div class = 'col-xs-3 text-center'>
            <a href = 'Registration.html'>Register</a>
        </div>
        <div class = 'col-xs-3 text-center'>
            <a href = 'Contact.html'>Contact Us</a>
        </div>
    </div>
</div>
<!-- <div id = "bar">

    <a href="Hostel.html">Mobile Phones</a><br>
    <br>
    <a href="Home.html">Laptops</a><br>
    <br>
    <a href="Home.html">Tablets</a><br>
    <br>
    <a href="Home.html">Earphones</a><br>
    <br>
    <a href="Food.html">Headphones</a><br>
    <br>
    <a href="Food.html">Television</a><br>
    <br>

</div> -->

<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><a href= "../Start1.php"><img src = "../img/one.png" id = "img0"></a></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="../mobile.html" class="w3-bar-item w3-button">Mobile Phones</a>
    <a href="../laptop.html" class="w3-bar-item w3-button">Laptops</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Headphones <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="../onear.html" class="w3-bar-item w3-button">On-Ear</a>
      <a href="../overear.html" class="w3-bar-item w3-button">Over-Ear</a>
      <a href="../noise.html" class="w3-bar-item w3-button">Noise Cancellation</a>
    </div>
    <a href="../earphones.html" class="w3-bar-item w3-button">Earphones</a>

    <a href="../tablets.html" class="w3-bar-item w3-button">Tablets</a>
    <a href="../televisions.html" class="w3-bar-item w3-button">Television</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>


<div id = "home">
    <br />
    <h3 class="w3-wide">HERE'S ONESTOP THE ONE STOP FOR IT ALL</h3>
    <b></b>
    <br><br>

    <img src = "../img/LuxeRed.png" id = "img2">
    <br /><br />
    <button class="btn btn-basic" onclick=add() >Buy Now</button>
    <br /><br />
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "onestop";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_stu="select * from item where name='solo'";         //replace name
    $run_stu=mysqli_query($con,$get_stu);
    while($row_stu=mysqli_fetch_array($run_stu))
    {
    $name=$row_stu['name'];
    $price = $row_stu['price'];
    $quantity=$row_stu['quantity'];

    echo "<div>

    <p>NAME  : Beats Solo 2</p>

    

    <p>PRICE : $price Rs.</p>

    X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X-X

    </div>";
    }


    $conn->close();



    ?>


    </div>

<br>
<script>

</script>

</body>



</html>
