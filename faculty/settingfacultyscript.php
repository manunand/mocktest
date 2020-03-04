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
$id1=($_POST['id']);
$username1=($_POST['username']);
/*$privilage =($_POST['privilege']);
*/if ($_POST['confirm']==$_POST['password']) {
$password=($_POST['password']);

$query="insert into faculty_login(username,password,privilege,id) values('$username1','$password',1,'$id1')";

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
  		<strong>Sorry!</strong> Please try to re enter your details. Please make sure credentials such as id and username are unique
  		<meta http-equiv="refresh" content="7;url=settingfaculty.php" />
	</div>
	<?php
} 
}
else
{
	?>
	<br><br><br>
	<div class="alert alert-danger">
  		<strong>Sorry!</strong> Passwords should be same
  		<meta http-equiv="refresh" content="7;url=settingfaculty.php" />
	</div>
	<?php
}
}
?>