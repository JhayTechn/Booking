<!DOCTYPE html>
<html>
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			$id =$function->escape_string(@$_GET['editid']);
			$script= "SELECT * FROM tbl_checklogs WHERE id='$id'";
			$query=mysqli_query($con,$script) or die (mysqli_error());
			$rs=mysqli_fetch_assoc($query);
			$Username= $function->escape_string($rs['Username']);
			$Password =$function->escape_string( $rs['Password']);
			$ConfirmPassword =$function->escape_string( $rs['ConfirmPassword']);
	 ?>
	<meta charset="utf-8">
	<title>Proper_Waste!</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images/jesusa.png" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
				</div>
				<form class="form-detail" action="save1.php" method="post" >
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="txtuser" id="full_name" class="input-text" required  value="<?php echo $Username; ?>">
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="txtpass" id="password" class="input-text" required value="<?php echo $Password; ?>">
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="txtcname" id="comfirm_password" class="input-text" required value="<?php echo $ConfirmPassword; ?>">
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="" class="register" value="Register">
						</div>
					</div>
				</form>
		
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>