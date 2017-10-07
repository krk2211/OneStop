<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<head>
    <?php require "login/loginheader.php"; ?>
    <link rel="stylesheet" href="css/styles.css">
<title>B.I.T.</title>
</head>
<body>



<br />
<div id = "Heading"><b>OneStop</b></div>
<br>
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
    <h3 class="w3-wide"><a href= "Start1.html"><img src = "img/one.png" id = "img0"></a></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="mobile.html" class="w3-bar-item w3-button">Mobile Phones</a>
    <a href="laptop.html" class="w3-bar-item w3-button">Laptops</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Headphones <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="onear.html" class="w3-bar-item w3-button">On-Ear</a>
      <a href="overear.html" class="w3-bar-item w3-button">Over-Ear</a>
      <a href="noise.html" class="w3-bar-item w3-button">Noise Cancellation</a>
    </div>
    <a href="earphones.html" class="w3-bar-item w3-button">Earphones</a>

    <a href="tablets.html" class="w3-bar-item w3-button">Tablets</a>
    <a href="televisions.html" class="w3-bar-item w3-button">Television</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>




<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">OneStop</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge">
	  <br>
    <p class="w3-center">The One Stop for it all.</p>
    <?php
    echo "Welcome, " . $_SESSION['username'];

    ?>
    <p class="w3-right">
      <a href="Cart.php"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
      <a href="login/logout.php"><i class="fa fa-search"></i></a>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="img/iphone.jpg" alt="OneStop" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">

      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>16 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3">
    <div class="w3-col l3 s6">
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/iphone.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/iphone.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p><br>iPhone 7+<br><b>75000 Rs.</b></p>
      </div>
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/Picture3.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/note.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p><br>Note 8<br><b>70000 Rs.</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/aw15r3nt_kbl_lnb_05000f90_gy_3.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <a href="php/alien.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
          </div>
        </div>
        <p><br>Alienware 15<br><b>155000 Rs.</b></p>
      </div>
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/Untitlsadasdaed-1.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/mac.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p><br>Apple Macbook Pro<br><b>225000 Rs.</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/Bose-1177249822-cq5dam.web.1000.1000-zoom.png" style="width:100%">

            <div class="w3-display-middle w3-display-hover">
              <a href="php/qc25.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p><br>Bose QuietComfort 25<br><b>39999 Rs. </b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/Beats-1823702445-_0003_overear-studio-wireless-silver-blue-rgb-thrqrtleft-zoom.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <a href="php/studio.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
          </div>
        </div>
        <p>Beats Studio<br><b class="w3-text-red">35999 Rs.</b></p>
      </div>
    </div>
    <div class="w3-col l3 s6">
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/Cix_s1jJ_x-ATTQ6AAEaUa6FxdU500.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">Sale</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/at.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

          <p><br>Audio-Technica ATH-SR5BT<br><b>10999 Rs.</b></p>
      </div>
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/square_list_zoom_hd_800_silver_01_sq_sennheiser.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">Sale</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/sennheiser.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p><br>Sennheiser HD800<br><b>21999 Rs.</b></p>
      </div>
    </div>

    <div class="w3-row w3">
      <div class="w3-col l3 s6">
        <div class="w3-container">
            <div class="w3-display-container">
              <img src="img/Samsung-1861911466-ch-fr-galaxy-tab-s3-9-7-t820-sm-t820nzkaaut-frontblack-61499670-zoom.png" style="width:100%">
              <span class="w3-tag w3-display-topleft">Sale</span>
              <div class="w3-display-middle w3-display-hover">
                <a href="php/tab3.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
              </div>
            </div>
          <p><br>Samsung Tab 3<br><b>75000 Rs.</b></p>
        </div>
        <div class="w3-container">
            <div class="w3-display-container">
              <img src="img/0026453_signature-series-folio-wrap-stand-for-microsoft-surface-pro-4.png" style="width:100%">
              <span class="w3-tag w3-display-topleft">Sale</span>
              <div class="w3-display-middle w3-display-hover">
                <a href="php/pro4.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
              </div>
            </div>

          <p><br>Microsoft Surface Pro 4<br><b>70000 Rs.</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/5e64657ab7c2454a2059161cd009a959.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/cx275.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>
          <p><br>Sennheiser CX 275s<br><b>799 Rs. </b></p>
        </div>
        <div class="w3-container">
            <div class="w3-display-container">
              <img src="img/Bose-1177236094-cq5dam.web.1000.1000-zoom.png" style="width:100%">
              <span class="w3-tag w3-display-topleft">New</span>
              <div class="w3-display-middle w3-display-hover">
                <a href="php/sound.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
              </div>
            </div>

          <p><br>Bose SoundSport<br><b>11999 Rs.</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="img/file.jpg" style="width:100%">
          <p><br> Samsung Flat 65-Inch 4K SmartTV<br><b>559999 Rs. </b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/xbr55x900e.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">Sale</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/sony.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>
          <p>Sony 55 Inch 4K Smart LED TV<br><b class="w3-text-red">499999 Rs.</b></p>
        </div>
      </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/LuxeRed.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/solo.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p> Beats Solo 2<br><b>339999 Rs.</b></p>
      </div>
      <div class="w3-container">
          <div class="w3-display-container">
            <img src="img/hesh_snake_25-500x500.png" style="width:100%">
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="php/hesh.php"><button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button></a>
            </div>
          </div>

        <p>Skullcandy Hesh 2<br><b>15999 Rs.</b></p>
      </div>
    </div>
  </div>





</div>

  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text"  placeholder="Enter e-mail" style="width:100%" color=black></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>


  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

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
</script>

</body>
</html>
