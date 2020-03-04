<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | Add Student</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h1 align="center" class="w3-animate-top">Add Student Details</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="addstudentscript.php" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="reg_no">Reg_NO:</label>
					<div class="col-sm-9">
						<input type="text" name="reg_no" style="background-color: transparent;" class="form-control" id="reg_no" placeholder="Enter Register Number" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-9">
						<input type="text" name="name" style="background-color: transparent;" class="form-control" id="name" placeholder="Enter Your Name" required="">
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gender">Gender:</label>
					<div class="container" style="padding-left: 17%">
						<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
						<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
					</div>
				</div><br>
				<div class="form-group">
				<label class="control-label col-sm-2" for="branch">Branch</label>
				<div class="col-sm-9">
					<select name="branch" class="form-control" id="branch" required="" style="background-color: transparent;">
						<option style="background-color: transparent;"></option>
							<option value="CSE">CSE</option>
							<option value="ECE">ECE</option>
							<option value="CVIL">CIVIL</option>
							<option value="MECH">MECH</option>
						</select>
					</div>
				</div><br>
				<div class="form-group">
					<label class="control-label col-sm-2" for="year_join">Year of Joining:</label>
					<div class="col-sm-9">
						<input type="text" name="year_join" style="background-color: transparent;" class="form-control" id="year_join" placeholder="Enter Year of Joining" required="">
					</div>
				</div><br>
			<div class="form-group">
			  	<label class="control-label col-sm-2" for="phone">Phone Number:</label>
			  	<div class="col-sm-9">
			  		<input type="Number" name="phone" style="background-color: transparent;" class="form-control" required="" id="phone" placeholder="Enter Your Phone Number" pattern="[789][0-9]{9}">
			  	</div>
			  </div><br>
			<div class="form-group">
			  	<label class="control-label col-sm-2" for="email">Email:</label>
			  	<div class="col-sm-9">
			  		<input type="email" name="email" style="background-color: transparent;" class="form-control" required="" id="email" placeholder="Enter email">
			  	</div>
			</div><br>			
			<div class="form-group">
			  	<label class="control-label col-sm-2" for="address">Address</label>
			  	<div class="col-sm-9">
			  		<textarea name="address" style="background-color: transparent;" class="form-control" required="" id="address" placeholder="Enter Your Address"></textarea>
			  	</div>
			  </div><br>
			  
			<div class="form-group">
				<div class="container" align="center">
					<button type="submit" class="btn btn-info" name="submit"> Submit</button>
				</div>
			</div>
		</form>
	</div>
</header>
</body>
</html>