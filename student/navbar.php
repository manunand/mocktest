<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="text/css" href="../img/mock3.jpeg">
	<meta  name="viewport" content="width=device-width,initial-scale=1">
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<?php
		include '../config2.php';
	?>
	<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href=""><img class="logo" src="../img/logo.png"></a>
					
				</div>
				<div class="collapse navbar-collapse" id="micon">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><b>Home</b></a></li>
						<!-- <li><a href="#"><b>Feature</b></a></li>
						<li><a href="#"><b>Team</b></a></li> -->
						<li><a href="teststudent.php"><b>Tests</b></a></li>
						<li><a href="viewresults.php"><b>Results</b></a></li>
						<li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Hello <?php echo $username; ?>
				          </b><span class="caret"></span></a>
				          <ul class="dropdown-menu" style="background-color: transparent;">
				            <li><a href="editprofile.php" ><b>Edit Profile</b></a></li>
				            <li><a href="changepass.php"><b>Change Password</b></a></li>
				            <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a></li>
				          </ul>
				        </li>		
				</ul>
				</div>
			</div>
		</nav>
</body>
</html>