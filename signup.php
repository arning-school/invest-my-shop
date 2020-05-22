<html lang="en">

<head>
    <!-- Title Page-->
    <title>Shop Start-Up School</title>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/icomoon.css">      

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<?php
session_start();
include("inc/config.php");
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $dob=$_POST['birthday'];
 $who=$_POST['whoareyou'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 


// image insert 

 $img = $_FILES['fi']['name'];
 $file_loc = $_FILES['fi']['tmp_name'];
 $target_dir = "images/";
 move_uploaded_file($file_loc, $target_dir.$img);
// insert image code end
 if(empty($name))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter a Valid Username','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif (empty($dob))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your DOB','', 'error')";
         echo "</script>";
         echo "</body>";
  }
  elseif (empty($who)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('choose who are you','', 'error')";
         echo "</script>";
         echo "</body>";
  }
   elseif (empty($email)) {

         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your Email','', 'error')";
         echo "</script>";
         echo "</body>";
             }

 elseif (empty($phone)) {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your phone number','', 'error')";
         echo "</script>";
         echo "</body>";
 }
 elseif(empty($address))
 {
         echo "<body>";
         echo "<script language='javascript'>";
         echo "Swal.fire('Enter your address','', 'error')";
         echo "</script>";
         echo "</body>";
 }
else
{
	
	if(!mysqli_query($con,"INSERT INTO signup (Name,DoB,who_are_you,Email,phone,Address,pic) VALUES ('$name','$dob','$who','$email','$phone','$address','$img')"))
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
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h4 class="title">Welcome To Aladdin Fintech</h4>
                    <form  method="POST" enctype="multipart/form-data" >
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" autocomplete="off"></div>
                              
						<div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday" autocomplete="off">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="whoareyou">
                                    <option disabled="disabled" selected="selected">Who Are You</option>
                                    <option>BUSINESS MAN</option>
                                    <option>INVESTOR</option>
                                
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" autocomplete="off">  
                        </div>
                        <div class="input-group">
						    <input class="input--style-3" type="text" placeholder="Address" name="address" autocomplete="off">
						</div>
                         <div class="input-group bdrnone">
                            <span class="icon-upload upload"></span>
                            <label class="btn choosebtn">

                                Upload Photo<input  type="file"  name="fi" hidden><!-- class="input--style-3" -->
                            </label>
                        </div>
						<div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
