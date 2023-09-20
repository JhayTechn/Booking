<!DOCTYPE html>
<html6
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="ccs/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body style="background-image: url(gray1.png); background-repeat: no-repeat; background-position: center;background-size: cover;">
<div class="container">
			<header class="header">
      <ul class="main-nav">
          <li><a href="dashboard.php" style="color: white; font-weight: 600; margin-left: 5%;">Home</a></li>
          <span style="font-weight: 1000; font-size: 24px; margin-left:40px; color: yellow;">"We Are The Saviours of Planet Earth"</span>
          <li><a href="index.php" style="color: white; font-weight: 600; margin-left: 20%;"  onlick="return confirmdel();">Logout</a></ul>
	</header>

	<div class="title">BOOKING FORM</div>
	<form method="POST" action="save_info.php" enctype="multipart/form-data">
		 
				<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="exit")
						{
							$var = "<script>alert('Successfully added!')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
		<div class="user-details">
			<div class="input-box">
				<span class="details">Name:</span>
				<input type="text" placeholder="Enter Your Name" name="txtnme" required="">
			</div>
				<div class="input-box">
				<span class="details">Complete Address:</span>
				<input type="text" placeholder="Enter Your Complete Address" name="txtadd" required="">
			</div>
				<div class="input-box">
				<span class="details">Date Of Booking:</span>
				<input type="text" placeholder="Enter Your Date Of Booking" name="txtdob" required="">
			</div>
				<div class="input-box">
				<span class="details">Day of Booking:</span>
				<input type="text" placeholder="Enter Your Day of Booking" name="txtdb" required="">
			</div>
				<div class="input-box">
				<span class="details">Contact Number:</span>
				<input type="text" placeholder="Enter Your Contact Number" name="txtcnum" required="">
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="input-box">
				<span class="details">E-mail:</span>
				<input type="email" placeholder="Enter Your E-mail" name="txtemail" required="">
			</div>
			<div class="input-box">
				<span class="details">Evidence Picture:</span>
				<input type="file" placeholder="Enter image" name="txtpic">
			</div>
			<br>
			<br>
			<div class="button">
				<input type="Submit" name="Register">
			</div>
		</div>
	</form>
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