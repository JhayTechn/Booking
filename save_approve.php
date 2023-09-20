<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");

	date_default_timezone_set('Asia/Manila');
	$datein=date("Y-m-d h:i:s A");


	$Name =$function->escape_string($_POST['txtnme']);
	$CompleteAddress =$function->escape_string($_POST['txtadd']);
	$DateofBooking =$function->escape_string($_POST['txtdob']);
	$DayofBooking=$function->escape_string($_POST['txtdb']);
	$ContactNumber =$function->escape_string( $_POST['txtcnum']);
	$Email =$function->escape_string($_POST['txtemail']);

	$filename= $_FILES['txtpic']['name'];
	$imgName= date("Ymdhis-").$_FILES['txtpic']['name'];
	$imgFile= $_FILES['txtpic']['tmp_name'];

	$script="SELECT * FROM tbl_bookingform WHERE Name='$Name'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if (mysqli_num_rows($query)>0)
	 {
		header("Location: Registrationform.php?notif=exit");
	 }
	else
	{
		if ($filename!=="")
		{
			move_uploaded_file($imgFile,"Image/".$imgName);
	$script ="INSERT into tbl_bookingform (datein,Name,CompleteAddress,DateofBooking,DayofBooking,ContactNumber,Email,Picture)
		values(
		'$datein',
		'$Name',
		'$CompleteAddress',
		'$DateofBooking',
		'$DayofBooking',
		'$ContactNumber',
		'$Email',
		'$imgName'
		)
		";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	header("Location: tableapproval.php?notif=save");
		}
	else
	{
		$script ="INSERT into tbl_bookingform  (datein,Name,CompleteAddress,DateofBooking,DayofBooking,ContactNumber,Email)
		values(
		'$datein',
		'$Name',
		'$CompleteAddress',
		'$DateofBooking',
		'$DayofBooking',
		'$ContactNumber',
		'$Email'
		)
		";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	header("Location: tableapproval.php?notif=save");
	}


}

 ?>