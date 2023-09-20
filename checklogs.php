<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");
if(isset($_POST['btnlog']))
{
	$Username =$function->escape_string($_POST['txtuser1']);
	$Password =$function->escape_string($_POST['txtpass1']);
	$ConfirmPassword =$function->escape_string($_POST['txtcname1']);
	$script = "SELECT * FROM tbl_checklogs WHERE Username='$Username' AND Password='$Password' AND ConfirmPassword='$ConfirmPassword'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if(mysqli_num_rows($query)>0)
	{
		$rs =mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['sec_id']= $rs['id'];
		header("Location: dashboard.php?notif=success");
	}
	else
	{
		header("Location: index1.php?notif=error");
	}

}
 ?>