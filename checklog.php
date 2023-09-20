<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");
if(isset($_POST['btnlog']))
{
	$username =$function->escape_string($_POST['txtusername']);
	$password =$function->escape_string($_POST['txtpassword']);
	$script = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if(mysqli_num_rows($query)>0)
	{
		$rs =mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['sec_id']= $rs['id'];
		header("Location: tableapproval.php?notif=success");
	}
	else
	{
		header("Location: index1.php?notif=error");
	}

}
 ?>