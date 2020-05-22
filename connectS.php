<?php
 $name = $_POST['name'];
 $birthday = $_POST['birthday'];
 $whoareyou = $_POST['whoareyou'];
 $email = $_POST['email'];
 $phone = $_POST['phone']; 
 $address = $_POST['address'];


$con = mysqli_connect('localhost','root','','aladdin customer');

$query = "INSERT INTO `signup`(`Name`, `DoB`, `Who Are You`, `Email`, `Phone number`, `Address`) VALUES ('$name','$birthday','$whoareyou','$email','$phone','$address')";

$run = mysqli_query($con,$query );

if($run == TRUE)
  
    echo "Your Sign In Is Sucessfully";
  
 else
 
   echo "Error !";
?>