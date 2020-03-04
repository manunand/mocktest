<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Add Test</title>
</head>
<body>
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
              <h1 align="center" class="w3-animate-top">Add Test Details</h1><br>
              <form  class="form-horizontal w3-animate-zoom" action="addtestscript.php" method="POST">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="sub_id">Subject Id:</label>
                       <div class="col-sm-9">
                  <select name="sub_id" class="form-control" id="sub_id" required="" style="background-color: transparent;">
                    <option disabled selected>Choose any Subjects</option>
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
                    $sql="select * from subject_list order by sub_id";
                    $result=mysqli_query($conn, $sql);
                    if ($result-> num_rows >0) {
                      while ($row= $result-> fetch_assoc()) {
                        echo "<option value=".$row["sub_id"].">".$row["sub_id"].". ".$row["sub_name"]."</option>";
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
                <!-- <div class="form-group">
                  <label class="control-label col-sm-2" for="sub_id">Subject Id:</label>
                  <div class="col-sm-9">
                    <input type="text" name="sub_id" style="background-color: transparent;" class="form-control" id="sub_id" placeholder="Enter Subject Id" required="">
                  </div>
                </div><br> -->
                  <div class="form-group">
                  <label class="control-label col-sm-2" for="test_name">Test Name:</label>
                  <div class="col-sm-9">
                    <input type="text" name="test_name" style="background-color: transparent;" class="form-control" id="test_name" placeholder="Enter Subject Name" required="">
                  </div>
                </div><br>
                <div class="form-group">
                <div class="container" align="center">
                  <button type="submit" class="btn btn-info" name="submit"> Submit</button>
                </div>
              </div>
            </form>
          </div>
        </header>
      </body>
</html>