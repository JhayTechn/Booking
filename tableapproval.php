<!DOCTYPE html>
<html>
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
	 ?>
	<title>Table</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
	<style>
.bot
{
	border:1px solid black;
	color: black;
	float: right;
	height: 40px;
	width: 360px; 
	font-size: 25px;
	font-family: rockwell;
	font-weight: bolder;
	text-decoration: none;
	text-align: center;
}
.liw
{
	border: 1px solid black;
	height: 30px;
	width: 70px;
	color:black;
	text-decoration: none;
	float: right;
	text-align: center;
}
.liw:hover
{
	background-color: lightgreen;
}


	</style>

</head>
<body>
	<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="delete")
						{
						
				?>
				<center>
					<div class="alert">
					Successfully Record Deleted!
				</div>
				</center>
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
							$var = "<script>alert('Successfully Added Booking')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
	<div class="res-tab">
		<a class="liw" href="dashboard.php">Logout</a>
		<table id="example" class="display nowrap" style="width:100%">
			<thead>
				    <th>Datein</th>
					<th>Name</th>
					<th>Complete Address</th>
					<th>Date of Booking</th>
					<th>Day of Booking</th>
					<th>Contact Number</th>
					<th>Email</th>
					<th>Evidence Of Garbage Picture</th>
					<th>Action</th>
			</thead>
			<tbody>
				<?php
					$script ="SELECT * FROM tbl_approved ORDER BY id ASC"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					while($rs=mysqli_fetch_assoc($query))
					{
						if($rs['Picture']!="")
							$pic = $rs['Picture'];
						else
							$pic = "default.png";
						print'<tr>
									<td>'.$function->entitiesHtml($rs['datein']).'</td>
									<td>'.$function->entitiesHtml($rs['Name']).'</td>
									<td>'.$function->entitiesHtml($rs['CompleteAddress']).'</td>
									<td>'.$function->entitiesHtml($rs['DateofBooking']).'</td>
									<td>'.$function->entitiesHtml($rs['DayofBooking']).'</td>
									<td>'.$function->entitiesHtml($rs['ContactNumber']).'</td>
									<td>'.$function->entitiesHtml($rs['Email']).'</td>
									<td><img src="Image/'.$pic.'" height="150" width="300"></td>
									<td>
											<a href="editapproval.php?editid='.urlencode($rs['id']).'">Approve</a>
											<a href="deleteapproved.php?delid='.urlencode($rs['id']).'" onclick="return confirmdel();" >Delete</a>
																	<h3 style="color:red">Pending..</h3>
								</td>

							</tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>
	<br>
	<br>
	<br>
		<center><h1>ADMIN APPROVAL FOR USERNAME AND PASSWORD!</h1></center>
		<br>
		<br>
	<div class="res-tab">
		<table id="example" class="display nowrap" style="width:100%">
			<thead>
				    <th>Username</th>
					<th>Password</th>
					<th>Confirm Password</th>
					<th>Date in</th>
					<th>Picture</th>
			</thead>
			<tbody>
				<?php
					$script ="SELECT * FROM tbl_checklogs ORDER BY id ASC"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					while($rs=mysqli_fetch_assoc($query))
					{
						if($rs['Picture']!="")
							$pic = $rs['Picture'];
						else
							$pic = "default.png";
						print'<tr>
									<td>'.$function->entitiesHtml($rs['Username']).'</td>
									<td>'.$function->entitiesHtml($rs['Password']).'</td>
									<td>'.$function->entitiesHtml($rs['ConfirmPassword']).'</td>
									<td>'.$function->entitiesHtml($rs['datein']).'</td>
									<td><img src="Image/'.$pic.'" height="100" width="100"></td>
									<td>
											<a href="adminup.php?editid='.urlencode($rs['id']).'">Approve</a>
											<a href="deleteapproved.php?delid='.urlencode($rs['id']).'" onclick="return confirmdel();" >Delete</a>
																	<h3 style="color:red">Pending..</h3>
								</td>

							</tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
		<script type="text/javascript">
			function confirmdel()
			{
				if(confirm("Are You Sure You Want to Delete?"))
					return true;
				return false;
			}
			$(document).ready(function() {
			    $('#example').DataTable( {
			        dom: 'Bfrtip',
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ]
			    } );
			} );
			
		</script>
</body>
</html>