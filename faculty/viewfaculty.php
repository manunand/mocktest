<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Faculty</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Faculties Details</b></h2><br>
			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black; font-size: 20px"><b>ID</b></th>
							<th  style="color:black ;font-size: 20px"><b>Name</b></th>
							<th  style="color:black;font-size: 20px"><b>Gender</b></th>
							<th style="color:black;font-size: 20px"><b>Branch</b></th>
							<th  style="color: black;font-size: 20px"><b>Designation</b></th>
							<th  style="color: black;font-size: 20px"><b>email</b></th>
							<th  style="color:black;font-size: 20px"><b>Phone</b></th>
							<th  style="color: black;font-size: 20px"><b>Address</b></th>
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
							$sql="select * from faculty";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["branch"]."</td><td>".$row["desig"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";
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