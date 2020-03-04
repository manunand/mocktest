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
$name =($_POST['name']);
$gender =($_POST['gender']);
$branch =($_POST['branch']);
$desig = ($_POST['desig']);
$email =($_POST['email']);
$phone=($_POST['phone']);
$address =($_POST['address']);
						$query="insert into faculty(name,gender,branch,desig,email,phone,address) values('$name','$gender','$branch','$desig','$email','$phone','$address')";
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
						  		<meta http-equiv="refresh" content="7;url=addfaculty.php" />
							</div>
							<?php
						} 
				}
?>