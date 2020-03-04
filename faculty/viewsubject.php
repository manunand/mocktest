<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Subject</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Subject Details</b></h2><br>
			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black; font-size: 20px"><b>Subject Id</b></th>
							<th  style="color:black ;font-size: 20px"><b>Subject Name</b></th>
							
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
							$sql="select * from subject_list order by sub_id";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["sub_id"]."</td><td>".$row["sub_name"]."</td></tr>";
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