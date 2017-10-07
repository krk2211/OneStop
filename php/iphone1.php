<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->

<!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
<title>B.I.T.</title>
</head>
<body>



<br />
<div id = "Heading"><b>OneStop</b></div>
<br>
<pre>
                                    <a href="Home.html">About</a>                              <a href="Registration.html">Register</a>                           <a href="Contact.html">Contact us</a>
</pre>
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
    <h3 class="w3-wide"><a href= "Start1.php"><img src = "one.png" id = "img0"></a></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Mobile Phones</a>
    <a href="#" class="w3-bar-item w3-button">Laptops</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Headphones <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">On-Ear</a>
      <a href="#" class="w3-bar-item w3-button">Over-Ear</a>
      <a href="#" class="w3-bar-item w3-button">Noise Cancellation</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Earphones</a>
    <a href="#" class="w3-bar-item w3-button">Laptops</a>
    <a href="#" class="w3-bar-item w3-button">Tables</a>
    <a href="#" class="w3-bar-item w3-button">Television</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>


<!-- <div id = "home"> -->
    <div class="span9">
        <div class="well well-small">
        <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
        <div class="row-fluid">
        <div id="featured" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/b1.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/b2.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/b3.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/b4.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
          </ul>
          </div>
           <div class="item">
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
              <i class="tag"></i>
                <a href="product_details.html"><img src="themes/images/products/6.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/7.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/8.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
          </ul>
          </div>
           <div class="item">
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/9.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
          </ul>
          </div>
           <div class="item">
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/4.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
                <div class="caption">
                  <h5>Product name</h5>
                   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                </div>
              </div>
            </li>
          </ul>
          </div>
          </div>
          <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#featured" data-slide="next">›</a>
          </div>
          </div>
    </div>
    <h4>Latest Products </h4>
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>

                  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>
                 <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>
                   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>
                  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>
                  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
                <div class="caption">
                  <h5>Product name</h5>
                  <p>
                    Lorem Ipsum is simply dummy text.
                  </p>
                   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div>
            </li>
          </ul>

    </div>
    <!-- </div> -->

<br>

</body>
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


</html>
