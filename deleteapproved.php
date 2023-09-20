 <?php 
define("myClass","_others/_includethis/");
define('connect', 'dbconnections/');
require_once(connect."dbcon.php");
require_once(myClass."_myclass.php");

	$id=$function->escape_string($_GET['delid']);
	$script="DELETE FROM tbl_approved WHERE id='$id'";
	$query=mysqli_query($con,$script) or die (mysqli_error());
	header("Location:tableapproval.php?notif=delete");
 ?>