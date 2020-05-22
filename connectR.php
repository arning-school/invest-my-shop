<?php
 	if(isset($_POST['name'])){
		 $name = $_POST['name'];
 	}else{
		 $name = "";
 	}
 	if(isset($_POST['gender'])){
		 $gender = $_POST['gender'];
 	}else{
		 $gender = "";
 	}
 	if(isset($_POST['fathername'])){
		 $fathername =  $_POST['fathername'];
 	}else{
		 $fathername = "";
 	}
 	if(isset($_POST['mothername'])){
		 $mothername =  $_POST['mothername'];
 	}else{
		 $mothername = "";
 	}
 	if(isset($_POST['dob'])){
		 $dob =  $_POST['dob'];
 	}else{
		 $dob = "";
 	}
 	if(isset($_POST['address'])){
		 $address =  $_POST['address'];
 	}else{
		 $address = "";
 	}
 	if(isset($_POST['city'])){
		 $city =  $_POST['city'];
 	}else{
		 $city = "";
 	}
 	if(isset($_POST['postoffice'])){
		 $postoffice =  $_POST['postoffice'];
 	}else{
		 $postoffice = "";
 	}
 	if(isset($_POST['pincode'])){
		 $pincode =  $_POST['pincode'];
 	}else{
		 $pincode = "";
 	}
 	if(isset($_POST['state'])){
		 $state =  $_POST['state'];
 	}else{
		 $state = "";
 	}
 	if(isset($_POST['country'])){
		 $country =  $_POST['country'];
 	}else{
		 $country = "";
 	}
 	if(isset($_POST['mobile'])){
		 $mobile =  $_POST['mobile'];
 	}else{
		 $mobile = "";
 	}
 	if(isset($_POST['adhar'])){
		 $adhar =  $_POST['adhar'];
 	}else{
		 $adhar = "";
 	}
 	if(isset($_POST['pan'])){
		 $pan =  $_POST['pan'];
 	}else{
		 $pan = "";
 	}
 	if(isset($_POST['voter'])){
		 $voter =  $_POST['voter'];
 	}else{
		 $voter = "";
 	}
 	if(isset($_POST['qualification'])){
		 $qualification =  $_POST['qualification'];
 	}else{
		 $qualification = "";
 	}
 	if(isset($_POST['shortbio'])){
		 $shortbio =  $_POST['shortbio'];
 	}else{
		 $shortbio = "";
 	}
 	if(isset($_POST['mission'])){
		 $mission =  $_POST['mission'];
 	}else{
		 $mission = "";
 	}
 	if(isset($_POST['vision'])){
		 $vision =  $_POST['vision'];
 	}else{
		 $vision = "";
 	}
  
	$con = mysqli_connect('localhost','root','','aladdin customer');

	$query = "INSERT INTO `registration`(`Name`, `Gender`, `Father_Name`, `Mother_Name`, `DOB`, `Full_Address`, `City`, `Post_Office`, `Pincode`, `State`, `Country`, `Mobile`, `Adhar_Card`, `Pan_Card`, `Voter_Id`, `Qualification`, `Short_Biography`, `Mission`, `Vision`) VALUES ('$name','$gender','$fathername','$mothername','$dob','$address','$city','$postoffice','$pincode','$state','$country','$mobile','$adhar','$pan','$voter','$qualification','$shortbio','$mission','$vision')";
	 

	$run = mysqli_query($con,$query );

	if($run == TRUE)
	  
	    echo "Your Form Is Sucessfully";
	  
	 else
	 
	   echo "Error !";
 

?>