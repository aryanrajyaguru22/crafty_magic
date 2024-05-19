<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Crafty Magic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/cm.png" />
</head>

<body>
 
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <!--  <img src="images/Logo.jpeg" alt="logo"> -->
              </div>
              <?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_form.css">
    <title>Login</title>
</head>
<body>
<div class="container">
  <div class="myform">   
   
  <form class="form-signin" method="POST">
    <h1 class="form-signin-heading text-center">Crafty Admin Login</h1>
    <div class="form-group">
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Enter Username" name="User_Name" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name="Password" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
</form>
    <!--<div class="image">
      <img src="image/1.jpeg" alt="admin" width="300px"> -->
</div>
</div>
</div>
</body>
</html>


<?php
    if(isset($_POST['submit']))
    {
        $username=$_POST['User_Name'];
        $password=$_POST['Password'];
        // $email=$_POST['Email'];

        if($username=="admin" && $password=="admin@123")
        {
          // $_SESSION["logindatabase"] = "admin";
          setcookie("admin","admin",60*60*60*30*1000);
          // echo "kgh";
          header("location:index.php");
        }
        else{
          // header("location:index.php");
          echo "<script>alert('wrong usier id or password')</script>";
          // echo "asd";
        }
    }
?>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
