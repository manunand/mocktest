<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Results</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Results</b></h2><br>
			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black; font-size: 20px"><b>Subject name</b></th>
							<th style="color: black; font-size: 20px"><b>Test name</b></th>
							<th style="color: black; font-size: 20px"><b>Questions Answered correctly</b></th>
							<th style="color: black; font-size: 20px"><b>Score</b></th>
							
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
							$sql="select sub_name,test_name,correct_answers,score from tests,subject_list,result where result.reg_no='".$id."' and tests.test_id=result.test_id and tests.sub_id=subject_list.sub_id order by result.test_id";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["sub_name"]."</td><td>".$row["test_name"]."</td><td>".$row["correct_answers"]."</td><td>".$row["score"]." %</td></tr>";
								}
								echo "</table>";
								echo "Your average Score is".$row['average']." ";
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