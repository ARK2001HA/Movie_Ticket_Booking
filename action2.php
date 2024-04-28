<?php
include('connection.php');
session_start();
$_SESSION['movieid']= $_REQUEST['attr'];
echo "<script>alert('Movie yet to be released!')</script>";
echo "<script>window.location.href='duplicatehome.php'</script>"
?>