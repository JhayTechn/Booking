<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");

	date_default_timezone_set('Asia/Manila');
	$datein=date("Y-m-d h:i:s A");

	$Username =$function->escape_string($_POST['txtuser']);
	$Password =$function->escape_string($_POST['txtpass']);
	$ConfirmPassword =$function->escape_string($_POST['txtcname']);

	$filename= $_FILES['txtpic']['name'];
	$imgName= date("Ymdhis-").$_FILES['txtpic']['name'];
	$imgFile= $_FILES['txtpic']['tmp_name'];

	$script="SELECT * FROM tbl_checklog WHERE Username='$Username'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if (mysqli_num_rows($query)>0)
	 {
		header("Location: tableapproval.php?notif=exist");
	 }

	 	else
	 	{
	 		if ($filename!=="")
	 		{
	 		move_uploaded_file($imgFile,"Image/".$imgName);
			$script ="INSERT into tbl_checklog (Username, Password, ConfirmPassword, datein,Picture)
	 	
		values(
		'$Username',
		'$Password',
		'$ConfirmPassword',
		'$datein',
		'$imgName'
		)
		";
				$query = mysqli_query($con,$script) or die(mysqli_error());
				header("Location: tableapproval.php?notif=save");
		}	
	}
 ?>