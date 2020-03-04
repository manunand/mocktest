<!DOCTYPE html>
<html>
<head>
  <title>Mock Test | Student Login</title>
  <style type="text/css">
    .content {
        max-width: 500px;
        margin: auto;
      /*  background: transparent;*/
      opacity: 0.7;
        padding: 10px;
         height: 100%; 

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .bg {
        /* The image used */
        background-image: url("img/banner.jpg");

        /* Full height */
        height: auto; 
        width: 100%;
    /*    padding-top: 8%;*/
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
  </style>
</head>
<body>
  <header class="header">
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
      <div class="content w3-animate-top " style="padding-top: 2%">
        <div class="w3-card-4" style="padding-top: 8%;border:solid thin black;border-radius: 10px;border-color: green;box-shadow: 1px 1px 90px #fff;background-color:  #eef9f7  ;">
          <div class="w3-container" align="center">
            <h2><b>Student Login</b></h2><br><br>
          </div>
          <form action="studentloginscript.php" method="POST">
            <div class="input-group" style="padding-left: 25px;padding-right: 25px">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  type="text" class="form-control input-lg" name="username" placeholder="Username" id="username" required="" style="background-color: transparent;" <?php if (isset($_get['error']))
                {
                  $username=$_POST['error'];
                  echo "value='".$username."'";
                } ?> />
            </div><br><br><br>
            <div>
              <?php if (isset($_POST['error'])) {
                echo "<label class='error'>Wrong username/password</label>";
              }
              ?>
            </div>
            <div class="input-group" style="padding-left: 25px;padding-right: 25px">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control input-lg" name="password"  placeholder="Password" required="" style="background-color: transparent;">
            </div><br><br><br>
            <div align="center">
              <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button><br><br><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
</body>
</html>