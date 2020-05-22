<?php
// $con = mysqli_connect('localhost','newuser','redhat','customer');
$con = mysqli_connect('localhost','root','','aladdin_customer');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
#echo "Connected successfully";
?>
