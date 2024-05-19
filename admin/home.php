<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>crafty Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/Logo.jpeg" alt="CRAFTY ADMIN"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/Logo.jpeg" alt="CRAFTY ADMIN"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
       
        <ul class="navbar-nav navbar-nav-right">
                  
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  id="Category" data-bs-toggle="collapse" href="#cat" aria-expanded="false" aria-controls="cat">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse multi-collapse" id="cat">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="itemadd.php"> Add </a></li>     
              </ul>
            </div>
          </li>          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="productadd.php"> Add </a></li>                
              </ul>
            </div>
          </li>  
          
          <li class="nav-item">
            <a class="nav-link" id="Orders" data-bs-toggle="collapse" href="#ord" aria-expanded="false" aria-controls="ord">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
              <i class="menu-arrow"></i>
            <div class="collapse" id="ord">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="orderview.php"> View </a></li>     
              </ul>
            </div>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="userdetail.php">View </a></li>        
              </ul>
            </div>
          </li>   
          

        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
    <form action="" method="post">

    </form>
    <div class="box-container">

<?php 
    include "conection.php";

    $countuser="SELECT * FROM user";
    $fire_count=mysqli_query($con,$countuser);
    if(!$fire_count)
    {
        echo mysqli_error($con);
    }
    $users=mysqli_num_rows($fire_count);
    // echo "<div class= 'box'>";
    // echo "<span class='box-text'> Total Users:  ".$users;
    // echo "</div>";
    

    
    $countproduct="SELECT * FROM product";
    $fire_count=mysqli_query($con,$countproduct);
    if(!$fire_count)
    {
        echo mysqli_error($con);
    }
    $product=mysqli_num_rows($fire_count);
    // echo "<div class= 'box'>";
    // echo "<br><br>Total Products:  ".$product;
    // echo "</div>";

    $select="SELECT * FROM orders;";
    $fire=mysqli_query($con,$select);
    if(!$fire)
    {
        echo mysqli_error($con);
    }
    $count=0;
    while($row=mysqli_fetch_assoc($fire))
    {
        $count++;
    }
    // echo "<div class= 'box'>";
    // echo "<br><br>Total Orders:  ".$count;
    // echo "</div>";
    echo ' <div class="content-wrapper">
          
    <div class="row">

      <div class="col-lg-4">
        <div class="card" style="text-align: center;">
          <div class="card-body">
            <h5 class="card-title">Total Orders</h5>
            <h1 class="card-text">'.$count.'</h1>
          </div>
        </div>  
      </div>

      <div class="col-lg-4">
        <div class="card" style="text-align: center;">
          <div class="card-body">
            <h5 class="card-title">Total Products</h5>
            <h1 class="card-text">'.$product.'</h1>
          </div>
        </div>  
      </div>

      <div class="col-lg-4">
        <div class="card" style="text-align: center;">
          <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            <h1 class="card-text">'.$users.'</h1>
          </div>
        </div>  
      </div>

      
      
    </div>
    
  </div>';


?>
    </div>
        </div>
        <!-- content-wrapper ends -->
     
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

