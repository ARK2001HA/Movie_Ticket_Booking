<?php
include('connection.php');
session_start();
if(isset($_SESSION['email']) && $_SESSION['email']!='')
{
	echo "<script>alert('Continue with booking!')</script>";
	echo "<script>window.location.href='duplicatehome.php'</script>";
	
}
else
{
	echo "<script>alert('Please Login!')</script>";
	echo "<script>window.location.href='signup.php'</script>";
}
?>