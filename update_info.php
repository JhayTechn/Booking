<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			
			 date_default_timezone_set('Asia/Manila');
			$datein=date("Y-m-d h:i:s A");	

			$id=$function->escape_string(@$_GET['id']);
			$Name = $function->escape_string($_POST['txtnme']);
			$CompleteAddress = $function->escape_string($_POST['txtadd']);
			$DateofBooking = $function->escape_string($_POST['txtdob']);
			$DayofBooking = $function->escape_string($_POST['txtdb']);
			$ContactNumber = $function->escape_string($_POST['txtcnum']);
			$Email = $function->escape_string($_POST['txtemail']);

			$filename= $_FILES['txtpic']['name'];
			$imgName= date("Ymdhis-").$_FILES['txtpic']['name'];
			$imgFile= $_FILES['txtpic']['tmp_name'];

			if ($filename!="")
		{
				move_uploaded_file($imgFile, "Image/".$imgName);
			$script= "UPDATE tbl_bookingform SET datein= '$datein', Name='$Name', CompleteAddress='$CompleteAddress',DateofBooking='$DateofBooking', DayofBooking='$DayofBooking',ContactNumber='$ContactNumber', Email='$Email', Picture='$imgName' WHERE id='$id'";
			$query= mysqli_query ($con,$script) or die (mysqli_error());
			header("Location:table.php?notif=updated");
		}
		else
		{
			$script= "UPDATE tbl_bookingform SET datein= '$datein', Name='$Name', CompleteAddress='$CompleteAddress',DateofBooking='$DateofBooking', DayofBooking='$DayofBooking',ContactNumber='$ContactNumber', Email='$Email' WHERE id='$id'";
			$query= mysqli_query ($con,$script) or die (mysqli_error());
			header("Location:table.php?notif=updated");
		}
 ?>
