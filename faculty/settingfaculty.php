<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Setting Faculty</title>
</head>
<body>
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
              <h1 align="center" class="w3-animate-top">Faculty Login Details</h1><br>
              <form  class="form-horizontal w3-animate-zoom" action="settingfacultyscript.php" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="id">Id:</label>
                  <div class="col-sm-9">
                    <input type="text" name="id" style="background-color: transparent;" class="form-control" id="id" placeholder="Enter id" required="">
                  </div>
                </div><br>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="username">username:</label>
                  <div class="col-sm-9">
                    <input type="text" name="username" style="background-color: transparent;" class="form-control" id="username" placeholder="Enter username" required="">
                  </div>
                </div><br>
                <div class="form-group">
                <label class="control-label col-sm-2" for="name">Password:</label>
                <div class="col-sm-9">
                  <input type="password" name="password" style="background-color: transparent;" class="form-control" id="password" placeholder="Enter password" required="">
                </div>
              </div><br>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Confirm:</label>
                <div class="col-sm-9">
                  <input type="password" name="confirm" style="background-color: transparent;" class="form-control" id="confirm" placeholder="Confirm Password" required="">
                </div>
              </div><br>
              <!-- <div class="form-group">
                <label class="control-label col-sm-2" for="privilage">Privilage:</label>
                <div class="col-sm-9">
                  <input type="number" name="privilage" style="background-color: transparent;" class="form-control" id="privilage" readonly="" value="1">
                </div> -->
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