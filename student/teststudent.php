<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Test List</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<marquee behavior="alternate" bgcolor="aqua">ALL THE BEST FOR YOUR MOCK-TEST!!!</marquee>
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Test Details</b></h2><br>
			<?php echo $id; ?>

			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black; font-size: 20px"><b>Test ID</b></th>
							<th  style="color:black ;font-size: 20px"><b>Subject Name</b></th>
							<th  style="color:black;font-size: 20px"><b>Test_name</b></th>
							<th  style="color:black;font-size: 20px"><b></b></th>

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
							$sql="select * from tests,subject_list where tests.sub_id=subject_list.sub_id and test_status='2'";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["test_id"]."</td><td>".$row["sub_name"]."</td><td>".$row["test_name"]."</td><td><a href='attendtest.php?tid=".$row["test_id"]."'><button type='button' class='btn btn-info'";
									$visibility_query="select * from result where reg_no='".$id."' and test_id=".$row['test_id']." ";
									$button_visibility=mysqli_query($conn, $visibility_query);
									if ($button_visibility-> num_rows >0) {
										 $disabled_btn="disabled";
									}
									else{
										$disabled_btn=" ";
									}

									echo "".$disabled_btn.">Attend</button></a></td></tr>";
								}
								
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