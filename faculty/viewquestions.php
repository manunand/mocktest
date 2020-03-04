<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | View Questions</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<form method="POST" action="viewquestions.php">
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Questions Details</b></h2><br>

			<div class="form-group">
                   <label class="control-label col-sm-2" for="test_id" style="text-align: right;">Test Id:</label>
                       <div class="col-sm-9">
                  <select name="test_id" class="form-control" id="test_id" required="" style="background-color: transparent;">
                    <option disabled selected>Choose any test</option>
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
							<th style="color: black;"><b>Question ID</b></th>
<!-- 							<th  style="color:black ;font-size: 20px"><b>Test Id</b></th>
 -->						<th  style="color:black;width: 45%;"><b>Question </b></th>
							<th style="color:black;"><b>Option A</b></th>
							<th style="color: black;"><b>Option B</b></th>
							<th style="color: black;"><b>Option C</b></th>
							<th style="color:black;"><b>Option D</b></th>
							<th style="color: black;"><b>True Answer</b></th>
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
							
							$sql="select * from questions where test_id='".$test_id."'";
							$result=mysqli_query($conn, $sql);
							if ($result-> num_rows >0) {
								while ($row= $result-> fetch_assoc()) {
									echo "<tr style='background-color:transparent; text-shadow:3px 3px 8px black'><td>".$row["que_id"]."</td><td>".$row["que_desc"]."</td><td>".$row["ans1"]."</td><td>".$row["ans2"]."</td><td>".$row["ans3"]."</td><td>".$row["ans4"]."</td><td>".$row["true_ans"]."</td></tr>";
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