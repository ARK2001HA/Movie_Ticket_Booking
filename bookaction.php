<?php
include("connection.php");
session_start();
$name= $_REQUEST['name'];
$location= $_REQUEST['location'];
$date= $_REQUEST['date'];
$time= $_REQUEST['time'];
$format= $_REQUEST['format'];
$language= $_REQUEST['language'];
$seat= $_REQUEST['seat'];
$cost= $_REQUEST['cost'];
$email= $_REQUEST['user_email'];
// echo $name,$location,$date,$time,$format,$language,$seat;
$sql= "INSERT INTO `movie_booking`(`user_id`, `name`, `location`, `date`, `time`, `format`, `language`, `seat`, `cost`,`email`) VALUES ('','$name','$location','$date','$time','$format','$language','$seat','$cost','$email')";
	$data= mysqli_query($conn,$sql);
	if ($data) 
	{
		$_SESSION['email_check']=$email;
		echo "<script>alert('Continue with payment!')</script>";
		echo "<script>window.location.href='payment.php'</script>";
	}
	else
	{
		echo "Not Inserted";
	}
?>