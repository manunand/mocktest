<!DOCTYPE html>
<html>
<head>
	<title>Mock Test | Attend Test</title>
</head>
<body>
	<header class="header">
		<?php
			include 'navbar.php';
			ini_set('display_errors', 1);
			error_reporting (E_ALL);
			error_reporting(E_ERROR | E_WARNING | E_PARSE);

			$servername ="localhost";
			$username= "root";
			$password= "password";
			$dbname = "mocktest";

			$conn = mysqli_connect($servername,$username,$password,$dbname);

			if ($conn->connect_error) {
				die("Connection failed: ");
			}

			$test_id = $_SESSION['test_id'];

			if (isset($_POST['submit'])) {
				$option = $_POST['option'];
				/*print_r($option);*/
				$sql="select * from questions where test_id = ".$test_id."";
				$result=mysqli_query($conn, $sql);
				if ($result-> num_rows >0) {
					$i=1;
					$flag=0;
					while ($row= $result-> fetch_assoc()) {
						if (is_null($option[$i])) {
							$option[$i]=0;
						}
						$query="insert into user_answer values('".$id."','".$test_id."','".$row['que_id']."','".$row['true_ans']."','".$option[$i]."')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							$flag=1;
							?>
							<div class="alert alert-success">
								<strong>Success!</strong> Your response has been successfully recorded.Thank you.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>
							<?php
							$i++;
						}
						else {
							?>
							<div class="alert alert-danger">
								<strong>Sorry!</strong> Please Select any option and click Submit
								<meta http-equiv="refresh" content="7;url=index.php" />
							</div>
							<?php
						}
					}
					if ($flag==1) {
						$test_score=0;
						$answered=0;
						$count=0;
						$sql="select * from user_answer where test_id = '".$test_id."' and reg_no='".$id."' ";
						$result=mysqli_query($conn, $sql);
						while ($row= $result-> fetch_assoc()) {
							$count++;
							if ($row['true_ans']==$row['given_ans']) {
								$answered++;
							}
						}

						
						$test_score=$answered/$count*100;

						$date=date("Y-m-d");
						echo $id.$test_id.$date.$answered.$test_score;

						$query="insert into result values('".$id."','".$test_id."','".$date."','".$answered."','".$test_score."')";
						$res = mysqli_query($conn,$query);
						if(mysqli_affected_rows($conn)>0) {
							$flag=1;
							?>
							<div class="alert alert-success">
								<strong>Success!</strong> Your response has been successfully recorded.Thank you.
								<meta http-equiv="refresh" content="6;url=index.php" />
							</div>
							<?php
							$i++;
						}
						else {
							?>
							<div class="alert alert-danger">
								<strong>Sorry!</strong> Result Not Stored
								<meta http-equiv="refresh" content="7;url=index.php" />
							</div>
							<?php
						}

					}
				}
			}
		?>
	</header>
</body>
</html>