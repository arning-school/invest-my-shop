<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop Start-up School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
<?php
session_start();
include("inc/config.php");
if(isset($_POST['submit']))
{
 $shopname = $_POST['shopname'];
 $gstno = $_POST['gstno'];
 $shopmobileno = $_POST['shopmobileno'];
 $ashopkeepername = $_POST['ashopkeepername'];
 $amobileno = $_POST['amobileno'];
 $aadharno = $_POST['aadharno'];
 $bshopkeepername = $_POST['bshopkeepername'];
 $bmobileno = $_POST['bmobileno'];
 $badharno = $_POST['badharno'];
 $cshopkeepername = $_POST['cshopkeepername'];
 $cmobileno = $_POST['cmobileno'];
 $cadharno = $_POST['cadharno'];
 $fulladdress = $_POST['fulladdress'];
 $city = $_POST['city'];
 $postoffice = $_POST['postoffice'];
 $pincode = $_POST['pincode'];
 $state = $_POST['state'];
 $country = $_POST['country'];
 $valueation = $_POST['valueation'];
 $aboutshop = $_POST['aboutshop'];
 $mission = $_POST['mission'];
 $vision = $_POST['vision'];
 
 if(empty($shopname))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter Shop Name','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif (empty($gstno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter GST No.','', 'error')";
         echo "</script>";
         echo "</body>";
  }
  elseif (empty($shopmobileno)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter Shop Mobile No.','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif (empty($ashopkeepername)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter 1.Shopkeeper Name','', 'error')";
         echo "</script>";
         echo "</body>";
             }

 elseif (empty($amobileno)) {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your phone number','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif(empty($aadharno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif(empty($bshopkeepername))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($bmobileno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif(empty($badharno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($cshopkeepername))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($cmobileno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($cadharno))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($fulladdress))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif(empty($city))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($postoffice))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($pincode))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($state))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
  elseif(empty($country))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif(empty($valueation))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }

  elseif(empty($aboutshop))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }

  elseif(empty($mission))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }

  elseif(empty($vision))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
else
{
	
	if(!mysqli_query($con,"INSERT INTO `shop information`(`Shop Name`, `GST No`, `Shop Mobile No`, `1.Shopkeeper Name`, `1.Mobile No`, `1.Adhar No`, `2.Shopkeeper Name`, `2.Mobile No`, `2.Adhar No`, `3.Shopkeeper Name`, `3.Mobile No`, `3.Adhar No`, `Full Address`, `City`, `Post Office`, `Pin Code`, `State`, `Country`, `Valueation`, `About Your Shop`, `Mission`, `Vision`) VALUES ('$shopname','$gstno','$shopmobileno','$ashopkeepername','$amobileno','$aadharno','$bshopkeepername','$bmobileno','$badharno','$cshopkeepername','$cmobileno','$cadharno','$fulladdress','$city','$postoffice','$pincode','$state','$country','$valueation','$aboutshop','$mission','$vision')"))
	{
		echo("Error description: " . mysqli_error($con));
	}

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('You are Succesfully Registered','', 'success')";
         echo "</script>";
         echo "</body>";
         header( "refresh:5;url=home.php" );

}
}
?>

<body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="home.php"><img src="logo.png" width="300px" height="65px"></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"></div>
					    	<span class="icon icon-envelope"></span>
							<div class="text">
					    		<span>Email</span>
						    	<a href="mailto:fintechaladdin@gmail.com"><span class="text">fintechaladdin@gmail.com</span></a>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>WhatsApp Group</span>
						    	<p class="mb-0 d-block">
								<a href="https://chat.whatsapp.com/EVkrGDWwJuUB8fmrBbkg5r" class="btn py-2 px-3 btn-primary">
								<span style= text-align:center;>Join Now</span></a></p>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="signup.php" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>Free Consulting</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="home.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="businessman.html" class="nav-link">Business Man</a></li>
	        	<li class="nav-item"><a href="investor.html" class="nav-link">Investor</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	            <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
	            <li class="nav-item active"><a href="brf.php" class="nav-link">Pre-Registration Form</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Pre-Registration Form For Business Man Shop</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="brf.php">For Business Man <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="brsf.php">For Business Man Shop <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="irf.php">For Investor<i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Business Man Shop Information</h2>
            <form action="connectRS.php" method="post" class="bg-light p-5 contact-form" autocomplete="off">
              <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Shop Name" name="shopname" autocomplete="off"></div>
                <div class="form-group">
				 <label Style= color:black;>Upload Your Shop Photo</label> <input type="file" accept="image/*">
				 <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="cp">
                                    <option disabled="disabled" selected="selected">Current Position Of Your Shop</option>
                                    <option>Thinking</option>
									<option>Early Stage</option>
                                    <option>Running Stage</option>
                                    <option>Less Than 1Lakh</option>
                                    <option>Less Than 5Lakh</option>
                                    <option>Up To 5Lakh</option>
                                
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div><br>
				<input type="text" class="form-control" placeholder="Enter GST No." name="gstno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Shop Mobile No." name="shopmobileno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter 1.Shopkeeper Name" name="ashopkeepername" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Mobile No." name="amobileno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Adhar No." name="aadharno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter 2.Shopkeeper Name" name="bshopkeepername" autocomplete="off"></div>          
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Mobile No." name="bmobileno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Adhar No." name="badharno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter 3.Shopkeeper Name" name="cshopkeepername" autocomplete="off"></div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Mobile No." name="cmobileno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Adhar No." name="cadharno" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Full Address" name="fulladdress" autocomplete="off"></div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your City" name="city" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Post Office" name="postoffice" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Pin Code" name="pincode" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your State" name="state" autocomplete="off"></div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Your Country" name="country" autocomplete="off"></div>
				<div class="form-group">
				 <input type="text" class="form-control" placeholder="Valueation Of Your Shop:" name="valueation" autocomplete="off"></div>
				<div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="About Your Shop आप ने अभी तक जितने भी दुकान में काम किया है या जितनी भी दुकान चलायी है उन सभी के बारे में बताइए इससे आप का लोग अनूभव जान सकेगें" name="aboutshop" autocomplete="off"></textarea></div>
                <div class="form-group">
				<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Enter Your Mission आप इस समय अपनी दुकानको बेहतर बनाने के लिए क्या  कर रहे है क्यो/ कर रहे है कैसे कर रहे हैा" name="mission" autocomplete="off"></textarea></div>
                <div class="form-group">
				<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Enter Your Vision 10 या 20----50---90 साल बाद आप अपनी दुकान को कहॉ तक ले कर जाएगें मतलब आप को लोग मार्केट में किस नाम से जानेगें" name="vision" autocomplete="off"></textarea></div>
              <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <img src="logo.png" width="250px" height="70px">
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">fintechaladdin@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li class="nav-item"><a href="home.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="businessman.html" class="nav-link">Business Man</a></li>
	        	<li class="nav-item"><a href="investor.html" class="nav-link">Investor</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	            <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
	            <li class="nav-item active"><a href="brf.php" class="nav-link">Pre-Registration Form</a></li>
			</ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/AladdinFintech"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/aladdin.fintech"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/aladdinfintech/"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/aladdin-fintech"><span class="icon-limkedin"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

