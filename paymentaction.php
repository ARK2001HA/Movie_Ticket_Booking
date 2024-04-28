<?php
include('connection.php');
$number= $_REQUEST['cardnum'];
$name= $_REQUEST['cardname'];
$month= $_REQUEST['month'];
$year= $_REQUEST['year'];
$cvv= $_REQUEST['cvv'];
$totalamt= $_REQUEST['totalpay'];
// echo $number,$name,$month,$year,$cvv,$totalamt;
$sql= "INSERT INTO `payment`(`user_id`, `cardnum`, `name`, `month`, `year`, `cvv`, `totalpay`) VALUES ('','$number','$name','$month','$year','$cvv','$totalamt')";
	$data= mysqli_query($conn,$sql);
if ($data) 
{
	echo "<script>alert('Ticket booked successfully!')</script>";
	echo "<script>alert('Enjoy the Show!')</script>";
	echo "<script>window.location.href='mybooking.php'</script>";
}
else
{
	echo "Not Inserted";
}
?>