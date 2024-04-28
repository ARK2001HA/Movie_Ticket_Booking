<?php
include('connection.php');
session_start();
$_SESSION['movieid']= $_REQUEST['attr'];
echo "<script>window.location.href='booking1.php'</script>";
?>