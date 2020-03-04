<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Add Subject</title>
</head>
<body>
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
              <h1 align="center" class="w3-animate-top">Add Subject Details</h1><br>
              <form  class="form-horizontal w3-animate-zoom" action="addsubjectscript.php" method="POST">
                
                <div class="form-group">
                  <label class="control-label col-sm-2" for="sub_name">Subject Name:</label>
                  <div class="col-sm-9">
                    <input type="text" name="sub_name" style="background-color: transparent;" class="form-control" id="sub_name" placeholder="Enter Subject Name" required="">
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