﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop Start-up School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

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
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $fathername = $_POST['fathername'];
 $mothername = $_POST['mothername'];
 $dob = $_POST['dob'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $postoffice = $_POST['postoffice'];
 $pincode = $_POST['pincode'];
 $state = $_POST['state'];
 $country = $_POST['country'];
 $mobile = $_POST['mobile'];
 $adhar = $_POST['adhar'];
 $pan = $_POST['pan'];
 $voter = $_POST['voter'];
 $qualification = $_POST['qualification'];
 $shortbio = $_POST['shortbio'];
 $mission = $_POST['mission'];
 $vision = $_POST['vision'];
 
 if(empty($name))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter a Valid Username','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif (empty($gender))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Select Gender','', 'error')";
         echo "</script>";
         echo "</body>";
  }
  elseif (empty($fathername)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Father Name','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif (empty($mothername)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Mother Name','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif (empty($dob)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Date Of Birth','', 'error')";
         echo "</script>";
         echo "</body>";
             }

 elseif (empty($address)) {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Full Address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif(empty($city))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your City','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($postoffice))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Post Office','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($pincode))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Pin Code','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($state))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your State','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($country))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Country','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($mobile))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Mobile','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($adhar))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Adhar Card','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($pan))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Pan Card','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($voter))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Voter Id','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty( $qualification))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Qualification','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($shortbio))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Short Bio','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($mission))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Mission','', 'error')";
         echo "</script>";
         echo "</body>";
 }
elseif(empty($vision))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Vision','', 'error')";
         echo "</script>";
         echo "</body>";
 }
else
{
	
	if(!mysqli_query($con,"INSERT INTO registrationr2 (Name,Gender,Father_Name,Mother_Name,DOB,Full_Address,City,Post_Office,Pincode,State,Country,Mobile,Adhar_Card,Pan_Card,Voter_Id,Qualification,Short_Biography,Mission,Vision) VALUES ('$name','$gender','$fathername','$mothername','$dob','$address','$city','$postoffice','$pincode','$state','$country','$mobile','$adhar','$pan','$voter','$qualification','$shortbio','$mission','$vision')"))
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
            <h1 class="mb-2 bread">Pre-Registration Form For Investor</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="brf.php">For Business Man <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="brsf.php">For Business Man Shop <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="irf.php">For Investor<i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">PERSONAL INFORMATION OF INVESTOR</h2><b>
            <form action="connectR2.php" method="POST" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off"></div>
                <div class="form-group">
				 <label Style= color:black;>Upload Your Photo</label> <input type="file" accept="image/*">
				 <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div><br>
				<input type="text" class="form-control" placeholder="Enter Your Father Name" name="fathername" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Mother Name" name="mothername" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Date of Birth" name="dob" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Full Address" name="address" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your City" name="city" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Post Office" name="postoffice" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Pincode" name="pincode" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your State" name="state" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Country" name="country" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Mobile No" name="mobile" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Adhar No" name="adhar" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Pan No" name="pan" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Voter Id" name="voter" autocomplete="off"></div>
                <div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Qualification" name="qualification" autocomplete="off"></div>
                <div class="form-group">
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Short Biography कम शब्द; में अपनी पुरी लाइफ जर्नी बताइए" name="shortbio" autocomplete="off"></textarea></div>
                <div class="form-group">
				<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Enter Your Mission आप इस समय अपने जिवन को बेहतर बनाने के लिए क्या कर रहे है, क्यो कर रहे है, कैसे कर रहे है" name="mission" autocomplete="off"></textarea></div>
                <div class="form-group">
				<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Enter Your Vision 10 या 20----50---90 साल बाद आप अपने जीवन को कहॉ लेकर जाएगें मतलब संसार में लोग आप को किस नाम से जानेगें" name="vision" autocomplete="off"></textarea></div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
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