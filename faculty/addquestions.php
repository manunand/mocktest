<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Add Questions</title>
</head>
<body>
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
                <h1 align="center" class="w3-animate-top">Add Questions Details</h1><br>
                <form  class="form-horizontal w3-animate-zoom" action="addquestionsscript.php" method="POST">
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="test_id">Test Id:</label>
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
                   <label class="control-label col-sm-2" for="que_desc">Question Description:</label>
                       <div class="col-sm-9">
                        <textarea name="que_desc" style="background-color: transparent;" class="form-control" required="" id="que_desc" placeholder="Enter Question Here"></textarea>
                       </div><br><br>
                   </div><br>
                   <div class="form-group">
                  <label class="control-label col-sm-2" for="ans1">Option A:</label>
                  <div class="col-sm-9">
                    <input type="text" name="ans1" style="background-color: transparent;" class="form-control" id="ans1" placeholder="Enter First Option" required="">
                  </div>
                </div><br><div class="form-group">
                  <label class="control-label col-sm-2" for="ans2">Option B:</label>
                  <div class="col-sm-9">
                    <input type="text" name="ans2" style="background-color: transparent;" class="form-control" id="ans2" placeholder="Enter Second Option" required="">
                  </div>
                </div><br><div class="form-group">
                  <label class="control-label col-sm-2" for="ans3">Option C:</label>
                  <div class="col-sm-9">
                    <input type="text" name="ans3" style="background-color: transparent;" class="form-control" id="ans3" placeholder="Enter Third Option" required="">
                  </div>
                </div><br><div class="form-group">
                  <label class="control-label col-sm-2" for="ans4">Option D:</label>
                  <div class="col-sm-9">
                    <input type="text" name="ans4" style="background-color: transparent;" class="form-control" id="ans4" placeholder="Enter Fourth Option" required="">
                  </div>
                </div><br>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="true_ans">True Answer:</label>
                  <div class="col-sm-9">
                    <input type="number" name="true_ans" style="background-color: transparent;" class="form-control" id="true_ans" placeholder="Enter True Answer" required="">
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