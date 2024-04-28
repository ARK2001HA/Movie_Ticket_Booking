<?php
include("connection.php");
$sql= "SELECT * FROM movie_booking";
$data= mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
	<div class="sidebar">
		<h1 class="logo">Movies+</h1>

		<ul class="nav">
			<li><a href="dashboard.php"><i class="fa fa-windows"></i> Dashboard</a></li>
			<li class="active"><a href="moviebookings.php"><i class="fa fa-shopping-bag"></i> Movie Bookings</a></li>
			<li><a href="moviepayment.php"><i class="fa fa-pie-chart"></i> Payments</a></li>
			<li><a href="movienew.php"><i class="fa fa-cube"></i> New Movies</a></li>
			<li><a href="movieupcoming.php"><i class="fa fa-database"></i> Upcoming Movies</a></li>
		</ul>

			<ul class="social">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Google</a></li>
			</ul>
		

	</div>
	<div class="main">
		
		<div class="head-section">
			<div class="col-6">
				<h2>Bookings</h2>
			</div>

			<div class="col-6" style="text-align: right;">
				<i class="fa fa-bell-o hicon"></i>
				<input type="text" class="search">
				<i class="fa fa-search hicon sicon"></i>

				<img src="img/person-2x.png" class="user">

				<div class="profile-div">
					<p><i class="fa fa-user"></i>   Profile</p>
					<p><i class="fa fa-cog"></i>   Settings</p>
					<p><i class="fa fa-power-off"></i>   Log Out</p>
				</div>

		<div class="notification-div">
			<p>Success!Your registration is now complete!</p>
			<p>Here's some information you may find useful!</p>			
		</div>

			</div>

			<div class="clearfix"></div>
		</div>

		<br><br>
		<div class="content">


			<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Format</th>
      <th scope="col">Language</th>
      <th scope="col">Seat</th>
      <th scope="col">Cost</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sl=1;
    while($result= mysqli_fetch_assoc($data))
    {
    ?>
    <tr>
      <td data-label="Period"><?php echo $sl;$sl++; ?></td>
      <td data-label="Period"><?php echo $result['name'] ?></td>
      <td data-label="Period"><?php echo $result['location'] ?></td>
      <td data-label="Period"><?php echo $result['date'] ?></td>
      <td data-label="Period"><?php echo $result['time'] ?></td>
      <td data-label="Period"><?php echo $result['format'] ?></td>
      <td data-label="Period"><?php echo $result['language'] ?></td>
      <td data-label="Period"><?php echo $result['seat'] ?></td>
      <td data-label="Period"><?php echo $result['cost'] ?></td>
      <td data-label="Period"><?php echo $result['email'] ?></td>
      
    </tr>
      <?php
      }
      ?>
  </tbody>
</table>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".user").click(function(){
    $(".profile-div").toggle(1000);
  });
  $(".hicon:nth-child(1)").click(function(){
    $(".notification-div").toggle(1000);
  });
  $(".sicon").click(function(){
    $(".search").toggle(1000);
  });
});
</script>

<script type="text/javascript">
	$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
</script>
</body>
</html>