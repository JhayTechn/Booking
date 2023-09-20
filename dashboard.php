<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.design
	{
		font-family: cardana;
		font-size: 25px;
		text-align: center;
		color: white;
		height: 150px;
		width: 100px;
	}
</style>
</head>
<body style="background-image: url(jos.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
				<?php 
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="success")
						{
							$var = "<script>alert('Successfully Login!')</script>";
					print $var;
				?>
				<?php  
						}
					}

 ?>
 <?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="save")
						{
							$var = "<script>alert('Successfully Booking')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
				
 	<header class="header" style="background-color: #03482b;">
		<h1 class="logo" style="color: white; margin-bottom: -0.5%;"><img src="logo.gif" style="height: 80px; width: 100px;">GARBAGE BOOKING SYSTEM - San Juan Mexico</h1>
      <ul class="main-nav">
          <li><a href="dashboard.php" style="color: white;">Home</a></li>
          <li><a href="Registrationform.php" style="color: white;">Booking Details</a></li>
          <li><a href="index1.php"  onclick="return confirmdel();" style="color: white;">logout</a></li>
      </ul>
	</header> 
<div class="bgpic">
<center>
				<h1 style="color: white;">Number of Booked Respondents</h1>
				
			<div class="design">
				<?php 
					$script ="SELECT * FROM tbl_bookingform LIMIT 7"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					$row=mysqli_num_rows($query);
					echo'<h1>'.$row.'</h1>';
					if (mysqli_num_rows($query)>=7)
					{
					// 		$var = "<script>alert('Booking Now!')</script>";
					// print $var;
						header("Location: dashboard1.php?notif=open");
					}
				 ?>
			</div>
			<h1 style="color: white;">Pending</h1>
			<div class="design">
				<?php 
					$script ="SELECT id FROM tbl_approved ORDER BY id"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					$row=mysqli_num_rows($query);
					echo'<h1>'.$row.'</h1>';
				 ?>
			</div>
</center>
</div>
	<script>
		function confirmdel()
			{
				if(confirm("Are You Sure You Want to logout?"))
					return true;
				return false;
			}
	</script>
</body>
</html>