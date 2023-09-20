<?php 
$hostname ="localhost";
$username ="root";
$password ="";
$db_name  ="db_book";
$con = mysqli_connect($hostname,$username,$password);
if(!$con)
{
	die('connection failed'.mysqli_error());
}
mysqli_select_db($con,$db_name);

 ?>