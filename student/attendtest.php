<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | Attend Test</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<form method="POST" action="storeresults.php">
		<div class="container">
			<?php
				$test_id=$_GET['tid'];
				/* echo $test_id;*/
				ini_set('display_errors', 1);
				error_reporting (E_ALL);
				$servername ="localhost";
				$username= "root";
				$password= "password";
				$dbname = "mocktest";
				$conn = mysqli_connect($servername, $username, $password,$dbname );
				if ($conn->connect_error) {
					die("Connection failed: ");
				}
				$sql="select * from tests,subject_list where tests.sub_id=subject_list.sub_id and test_id=".$test_id."";
				$result=mysqli_query($conn, $sql);
				$row= $result-> fetch_assoc();

			?>
			<marquee behavior="alternate"> <h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b><?php echo "Subject: ".$row['sub_name'];?><br><?php echo "Test Name: ".$row['test_name']; ?></b></h2></marquee>
			<h3><b>Directions: Among the given set of choices,choose the correct answer.</h3></b>			
			<?php
							
							$sql="select * from questions where test_id = ".$test_id."";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								$i=1;
								while ($row= $result-> fetch_assoc()) { ?>
									<div class="card" style="border: solid thin lightblue;">
										<div style="padding-left: 5%">
											<h4><b><?php echo "".$i.". ".$row['que_desc'].""; ?></b></h4>
											<div style="padding-left: 5%"><input type="radio" name="option[<?php echo $i; ?>]" value="1" required style="padding-left: 10%">
												<?php echo " A. ".$row['ans1']; ?><br>
												<input type="radio" name="option[<?php echo $i; ?>]" value="2"  required><?php echo " B. ".$row['ans2']; ?><br>
												<input type="radio" name="option[<?php echo $i; ?>]" value="3"  required><?php echo " C. ".$row['ans3']; ?><br>
												<input type="radio" name="option[<?php echo $i; ?>]" value="4"  required><?php echo " D. ".$row['ans4']; ?><br><br>
											</div>
										</div>
										<?php $i++;
										$_SESSION['test_id'] = $test_id;
										?>
										</div><br><?php
								}
							}
							else{
								?>
									<br><br><br><br><br><br><br><br><br>
									<div class="alert alert-danger">
								  		<strong>Sorry!</strong> No Any questions are added to this test
								  		<meta http-equiv="refresh" content="4;url=teststudent.php" />
									</div>
								<?php
							}
							$conn-> close();
				?>
				<div class="form-group">
					<div class="container" align="center">
						<button type="submit" class="btn btn-info" name="submit"> Submit</button>
					</div>
				</div>
			</div>
		</form>
	</header>
</body>
</html>