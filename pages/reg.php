<?php
include("config.php");
$username 	= $_POST['username'];
$email 		= $_POST['email'];
$password 	= $_POST['password'];
$confirm 	= $_POST['confirm'];
$sex		= $_POST['sex'];
$country	= $_POST['country'];
$address	= $_POST['address'];


$f = mysqli_query($con,"insert into reg(`Username`,`Email`,`Password`,`Confirm`,`sex`,`country`,`Address`) values ('$username', '$email', '$password', '$confirm','$sex','$country','$address')");
// $e= "insert into book(Adults, Check-In-Date, Cehck-out-Date, Type Of Room)values('$adults', '$checkin', '$checkout', '$type')";
// $f= mysql_query($e);
if($f)
{
echo "We will get in touch with you soon. Thank you for your patience";
}
else
{
echo "Error";
}
?> 