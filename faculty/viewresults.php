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
		<form method="POST" action="viewresults.php">
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Student Results</b></h2><br>

			<div class="form-group">
                   <label class="control-label col-sm-2" for="test_id" style="text-align: right;">Choose Test:</label>
                       <div class="col-sm-9">
                  <select name="test_id" class="form-control" id="test_id" required style="background-color: transparent;">
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
                        echo "<option value=".$row["test_id"].">".$row["test_id"].". ".$row["sub_name"].", ".$row["test_name"]."</option>";
                      }
                    }
                    else{
                      echo "0 result";
                    }
                    $conn-> close();
                  ?>
                  </select>
                   </div>
            </div><br>
                <div class="form-group">
                <div class="container" align="center">
                  <button type="submit" class="btn btn-info" name="submit">View</button>
                </div>
              </div>
			<!-- <div style="animation-duration: 3s;" class="w3-animate-zoom">-->
			<div class="table-responsive w3-animate-zoom">
				<table class="table table-striped" style=" font-weight: bold;text-shadow: 2px 2px 4px white">
					<thead>
						<tr>
							<th style="color: black;"><b>Reg. Number</b></th>
							<th style="color:black;"><b>Subject Name</b></th>
							<th style="color:black;"><b>Test Name</b></th>
							<th style="color: black;"><b>Test Date</b></th>
							<th style="color: black;"><b>Answered Correctly</b></th>
							<th style="color:black;"><b> Test Score</b></th>
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
							if (isset($_POST['submit'])) {
								$test_id =($_POST['test_id']);
							
							$sql="select result.reg_no,subject_list.sub_name,tests.test_name,result.test_date,result.correct_answers,result.score from result,tests,subject_list where result.test_id='".$test_id."' and result.test_id=tests.test_id and tests.sub_id=subject_list.sub_id order by result.reg_no";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["reg_no"]."</td><td>".$row["sub_name"]."</td><td>".$row["test_name"]."</td><td>".$row["test_date"]."</td><td>".$row["correct_answers"]."</td><td>".$row["score"]." %</td></tr>";
								}
/*								echo "</table>";
*/							}
							else{
								echo "0 result";
							}
							$conn-> close();
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		</form>
	</header>
</body>
</html>