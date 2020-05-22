<?php
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

$con = mysqli_connect('localhost','root','','aladdin customer');

$query = "INSERT INTO `shop information`(`Shop Name`, `GST No`, `Shop Mobile No`, `1.Shopkeeper Name`, `1.Mobile No`, `1.Adhar No`, `2.Shopkeeper Name`, `2.Mobile No`, `2.Adhar No`, `3.Shopkeeper Name`, `3.Mobile No`, `3.Adhar No`, `Full Address`, `City`, `Post Office`, `Pin Code`, `State`, `Country`, `Valueation`, `About Your Shop`, `Mission`, `Vision`) VALUES ('$shopname','$gstno','$shopmobileno','$ashopkeepername','$amobileno','$aadharno','$bshopkeepername','$bmobileno','$badharno','$cshopkeepername','$cmobileno','$cadharno','$fulladdress','$city','$postoffice','$pincode','$state','$country','$valueation','$aboutshop','$mission','$vision')";

$run = mysqli_query($con,$query );

if($run == TRUE)
  
    echo "Your Form Is Sucessfully";
  
 else
 
   echo "Error !";

?>