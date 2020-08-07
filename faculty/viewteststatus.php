<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | Change Test Status</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
		?>
		<form method="POST" action="viewteststatus.php">
		<div class="container">
			<h2 class="well well-sm" style="background-color:transparent; animation-duration: 3s;text-shadow:1px 1px 8px black; color: white"><b>Change Test Status</b></h2><br>

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
                      	if ($row["test_status"] == 1) {
                      		$t_status="Uploading Stage";
                      	}
                      	elseif ($row["test_status"] == 2) {
                      		$t_status="Exam Stage";
                      	}
                      	else{
                      		$t_status="Result Stage";
                      	}
                        echo "<option value=".$row["test_id"].">".$row["test_id"].". ".$row["sub_name"].", ".$row["test_name"]." (".$t_status.")</option>";
                      }
                    }
                    else{
                      echo "0 result";
                    }
                    $conn-> close();
                  ?>
                  </select>
                   </div>
            </div><br><br><br>
            <div class="form-group">
				<label class="control-label col-sm-2" style="text-align: right;" for="test_status">Choose test status:</label>
				<div class="col-sm-9">
					<select name="test_status" class="form-control" id="test_status" required="" style="background-color: transparent;">
						<option selected disabled=""> Choose Status</option>
					  	<option value="1">Question Uploading Stage</option>
					  	<option value="2">Exam writing Stage</option>
					  	<option value="3">Results Stage</option>
					</select>
				</div>
			</div><br><br><br>
                <div class="form-group">
                <div class="container" align="center">
                  <button type="submit" class="btn btn-info" name="submit">Change</button>
                </div>
              </div>
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
						$t_status = ($_POST['test_status']);
						$query="update tests set test_status='".$t_status."' where test_id like '".$test_id."'";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
						  ?><br>
						  <div class="alert alert-success">
						      <strong>Success!</strong> Your response has been successfully updated.
						    <meta http-equiv="refresh" content="2;url=index.php" />
						  </div>

						  <?php
						}
						else {
						  ?>
						  <br>
						  <div class="alert alert-danger">
						      <strong>Sorry!</strong>Nothing is Updated.Thank you
						      <meta http-equiv="refresh" content="2;url=index.php" />
						  </div>
						  <?php
						}

					}

				?>
			
		</div>
		</form>
	</header>
</body>
</html>