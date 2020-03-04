<?php 
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "mocktest";



$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: ");
}

if(session_id() == '') {
    session_start();
}

$username=$_SESSION['login_user'];
$sql="select * from faculty_login where username='".$username."'";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$login_session=$row['username'];
$privilege=$row['privilege'];
$id=$row['id'];

if (!isset($login_session)) {
	mysql_close($conn);
	header('Location:../facultylogin.php');
}
   $expireTime = 20;

	if(time() > $_SESSION['expire'])
	{
    	header("location:logout.php");
	}

	else { $_SESSION['expire'] = time()+$expireTime*60; }



 ?>