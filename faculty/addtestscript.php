<?php
ini_set('display_errors', 1);
error_reporting (E_ALL);

$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "mocktest";
$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['submit'])) {
$sub_id =($_POST['sub_id']);
$test_name =($_POST['test_name']);

						$query="insert into tests(sub_id,test_name) values('$sub_id','$test_name')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							?><br><br><br>
							<div class="alert alert-success">
						  		<strong>Success!</strong> Your response has been successfully recorded.Thank you.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>

							<?php
						}
						else {
							?>
							<br><br><br>
							<div class="alert alert-danger">
						  		<strong>Sorry!</strong> Please try to re enter your details. Please make sure your credentials.
						  		<meta http-equiv="refresh" content="7;url=addtest.php" />
							</div>
							<?php
						} 
				}
?>