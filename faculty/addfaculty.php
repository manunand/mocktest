<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | Add Faculty</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h1 align="center" class="w3-animate-top">Add Faculty Details</h1><br>
			<form  class="form-horizontal w3-animate-zoom" action="addfacultyscript.php" method="POST">
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
					<label class="control-label col-sm-2" for="desig">Designation:</label>
					<div class="col-sm-9">
						<select name="desig" class="form-control" id="desig" required="" style="background-color: transparent;" required="">
							<option></option>
							<option value="Principal">Principal</option>
							<option value="HOD">HOD</option>
							<option value="Associate Professor">Associate Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Non Teaching">Non Teaching</option>
						</select>
			  </div>
			</div><br>
			<div class="form-group">
			  	<label class="control-label col-sm-2" for="email">Email:</label>
			  	<div class="col-sm-9">
			  		<input type="email" name="email" style="background-color: transparent;" class="form-control" required="" id="email" placeholder="Enter email">
			  	</div>
			  </div><br>
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="phone">Phone Number:</label>
			  	<div class="col-sm-9">
			  		<input type="Number" name="phone" style="background-color: transparent;" class="form-control" required="" id="phone" placeholder="Enter Your Phone Number" pattern="[789][0-9]{9}" value="<?php echo $Phone; ?>">
			  	</div>
			  </div><br>
			  
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="address">Address</label>
			  	<div class="col-sm-9">
			  		<textarea name="address" style="background-color: transparent;" class="form-control" required="" id="address" placeholder="Enter Your Address" value="<?php echo $address; ?>"></textarea>
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