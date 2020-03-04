<?php 

ini_set('display_errors', 1);
error_reporting (E_ALL);
echo "My first PHP script!";
$servername ="localhost";
$username= "root";
$password= "password";
$dbname = "mocktest";



$conn = mysqli_connect($servername, $username, $password,$dbname );
if ($conn->connect_error) {
    die("Connection failed: ");
}
//echo "connected suceessfully";
  if(isset($_POST['submit'])) { 
$username=$_POST['username'];
$password=$_POST['password'];
/*echo "$username";
*/$sql="select * from student_login where username like '$username'";
mysqli_select_db($conn,$dbname);
$query=mysqli_query($conn, $sql);
                    if($query){
                $row= mysqli_fetch_assoc($query);
                $dbusername=$row['username'];
                $privilege=$row['privilege'];
                $dbpassword=$row['password'];
                $id=$row['reg_no'];
            }

            if($username== $dbusername && $password== $dbpassword){
               session_start();
                    $_SESSION['expire'] = time() + 15*60;
                    $_SESSION['login_user']=$username;
                    $_SESSION['prev'] = $privilege;
                    $_SESSION['logged']= true;
                    if ($privilege==1) {
                    header('Location:student/');
                    echo "successful";
                    }
                    else
                    {
                      header('Location:studentlogin.php');
                      echo "successful";
                    }
              
              }

                else{
                      $_SESSION['logged']=false;
                header("location:studentlogin.php?error=".$username."");
              
            }
      }

 ?>
