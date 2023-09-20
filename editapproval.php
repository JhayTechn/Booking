<!DOCTYPE html> 
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			$id =$function->escape_string(@$_GET['editid']);
			$script= "SELECT * FROM tbl_approved WHERE id='$id'";
			$query=mysqli_query($con,$script) or die (mysqli_error());
			$rs=mysqli_fetch_assoc($query);
			$Name= $function->escape_string($rs['Name']);
			$CompleteAddress =$function->escape_string( $rs['CompleteAddress']);
			$DateofBooking =$function->escape_string( $rs['DateofBooking']);
			$DayofBooking = $function->escape_string($rs['DayofBooking']);
			$ContactNumber =$function->escape_string( $rs['ContactNumber']);
			$Email =$function->escape_string( $rs['Email']);	
		 ?>
	<title>Updating Form</title>
	<link rel="stylesheet" type="text/css" href="ccs/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
 <body>
<div class="container">
	<div class="title">Pending And Approval Information</div>
	<form method="POST" action="save_approve.php?id=<?php echo urlencode($id);?>" enctype="multipart/form-data">
		
				<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="exit")
						{
							$var = "<script>alert('Record already exist')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
		<div class="user-details">
			<div class="input-box">
				<span class="details">Name:</span>
				<input type="text" name="txtnme" required="" value="<?php echo $Name; ?>">
			</div>
				<div class="input-box">
				<span class="details">Complete Address:</span>
				<input type="text"  name="txtadd" required="" value="<?php echo $CompleteAddress; ?>">
			</div>
				<div class="input-box">
				<span class="details">Date Of Booking:</span>
				<input type="text"  name="txtdob" required="" value="<?php echo $DateofBooking; ?>">
			</div>
				<div class="input-box">
				<span class="details">Day of Booking:</span>
				<input type="text"  name="txtdb" required="" value="<?php echo $DayofBooking; ?>">
			</div>
				<div class="input-box">
				<span class="details">Contact Number:</span>
				<input type="text"  name="txtcnum" required="" value="<?php echo $ContactNumber; ?>">
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="input-box">
				<span class="details">E-mail:</span>
				<input type="email"  name="txtemail" required="" value="<?php echo $Email; ?>">
			</div>
				<div class="input-box">
				<span class="details">Evidence Picture:</span>
				<input type="file" placeholder="Enter image"  name="txtpic" value="<?php echo $imgFile; ?>">
			</div>
			<br>
			<br>
			<div class="button">
				<input type="Submit" name="Register">
			</div>
		</div>
	</form>
</div>
</body>
</html>