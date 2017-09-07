<?php
include("config.php");
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$mobile 	= $_POST['mobile'];
$subject 	= $_POST['subject'];


$f = mysqli_query($con,"insert into mail(`Name`, `Email`, `Mobile`, `Subject`) values ('$name', '$email', '$mobile', '$subject')");
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