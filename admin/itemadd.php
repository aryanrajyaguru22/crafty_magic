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
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/Logo.jpeg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/Logo.jpeg" alt="logo"/></a>
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
          
      <?php
        $flag=0;
        $data = file_get_contents("./catagory.txt");
        $data_arr=explode(",",$data);
        if($data_arr[0]==null)
        {
        $flag=1;
        }
        // echo $data;
        // print_r($data_arr);

        function copyf($name)
        {
        $source = 'C:/wamp64/www/crafty_magic/tamplate/tamplate.php'; 
        $dedtination="C:/wamp64/www/crafty_magic/".$name.".php";
        if(copy($source,$dedtination))
        {
            echo "<script>alert('catagory has been added.')</script>";
        }
        else{
            echo "error";
        }
        }
        function deletef($name)
        {
        unlink("C:/wamp64/www/crafty_magic/".$name.".php");
        }

        function uplode($prod)
        {
        global $data,$flag;
        if($flag==0)
        {
            $new_data=rtrim($data);
            $newprod=$new_data.",".$prod;
            file_put_contents("./catagory.txt", $newprod);
            copyf($prod);
            // echo $newprod;
        }
        else
        {
            $newprod=$data.$prod;
            file_put_contents("./catagory.txt", $newprod);
            copyf($prod);

        }
        }

        function delete($key)
        {
        global $data_arr;
        $data_arr2=$data_arr;
        $subtodel = array_search($key,$data_arr2);
        // echo $subtodel;
        unset($data_arr2[$subtodel]);
        // print_r($data_arr2);
        $newsubjects=implode(",",$data_arr2);
        // echo $newsubjects;
        file_put_contents("./catagory.txt", $newsubjects);

        }

        if(array_key_exists("add",$_POST))
        {
        uplode($_POST["prod"]);
        // echo "<script>alert('catagory has been added.')</script>";

        }

        if(array_key_exists("delete_sub",$_POST))
        {
        delete($_POST["key"]);
        $fname=$_POST["key"];
        deletef($fname);
        echo "<script>alert('catagory deleted done.')</script>";

      }

      end($data_arr);
      $key=key($data_arr);
      $i=0;?>

<!-- <table>
    <th>subject</th> -->
    <div class="content-wrapper">
  <div class="container">
    <h2>Items View</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Subject</th>
          <!-- <th>Name</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        while($i<=$key) {
          // if($data_arr==null) {
          //     break;
          // }
          ?>
          <!-- <tr>
              <td> -->
          <?php echo '<tr>
              <td>'. $data_arr[$i] .'</td>
              <td>
                  <form action="" method="post">
                      <input type="submit" value="delete" name="delete_sub" style="margin-left: 15px;">
                      <input type="hidden" name="key" value="'.$data_arr[$i].'">
                  </form>
              </td>
            </tr>' ?>
          <!-- </td>
              <td>
              <form action="" method="post">
                  <input type="submit" value="delete" name="delete_sub" style="margin-left: 15px;">
                  <input type="hidden" name="key" value="<?php echo $data_arr[$i] ?>">
              </form>
          </td>
          </tr> -->
        <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<!-- <form action="" method="post">
    <tr>
        <td>
            <input type="text" name="prod" id="">
        </td>
        <td>
            <input type="submit" value="add" name="add" style="margin-left: 15px;">
        </td>
        
    </tr>

</form> -->
</table>
        <div class="content-wrapper">
          
          <div class="row">

          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Subject</h4>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name = "prod" id="exampleInputName1" placeholder="Name">
                    </div>                                      
                    <button type="submit" name="add" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            
            
          </div>
          
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

