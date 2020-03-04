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
$reg_no =($_POST['reg_no']);
$name =($_POST['name']);
$gender =($_POST['gender']);
$branch =($_POST['branch']);
$year_join = ($_POST['year_join']);
$phone=($_POST['phone']);
$email =($_POST['email']);
$address =($_POST['address']);
						$query="insert into student(reg_no,name,gender,branch,year_join,phone,email,address) values('$reg_no','$name','$gender','$branch','$year_join','$phone','$email','$address')";
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
						  		<meta http-equiv="refresh" content="7;url=addstudent.php" />
							</div>
							<?php
						} 
				}
?>