<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Test</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Test Details</b></h2><br>
			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black; font-size: 20px"><b>Test ID</b></th>
							<th  style="color:black ;font-size: 20px"><b>Subject Name</b></th>
							<th  style="color:black;font-size: 20px"><b>Test_name</b></th>
							<th  style="color:black;font-size: 20px"><b>Test_Status</b></th>
						</tr>
					</thead>
					<tbody style="background-color: transparent;">
						<?php 
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
							$sql="select * from tests,subject_list where tests.sub_id=subject_list.sub_id";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									if ($row["test_status"] == 1) {
			                      		$t_status="Uploading Stage";
			                      	}
			                      	elseif ($row["test_status"] == 2) {
			                      		$t_status="Exam Stage";
			                      	}
			                      	else{
			                      		$t_status="Result Stage";
			                      	}
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["test_id"]."</td><td>".$row["sub_name"]."</td><td>".$row["test_name"]."</td><td>".$t_status."</td></tr>";
								}
								echo "</table>";
							}
							else{
								echo "0 result";
							}
							$conn-> close();
						?>
					</tbody>
				</table>
			</div>
		</div>
	</header>
</body>
</html>