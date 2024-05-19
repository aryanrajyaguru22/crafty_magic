<?php
	session_start();
	include "conection.php";
	$data=file_get_contents("C:/wamp64/www/crafty_magic/admin/catagory.txt");
	$data_arr=explode(",",$data);
	// print_r($data_arr);
	// var_dump($_SERVER['PHP_SELF']);                   // e.g., 'test/test.php'
	// var_dump(basename($_SERVER['PHP_SELF']));         // e.g., 'test.php'
	$fnamearr=explode("/",$_SERVER["PHP_SELF"]); // e.g., 'test'
	$endindex=array_search(end($fnamearr),$fnamearr);
	$fname=explode(".",$fnamearr[$endindex]);
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title><?php echo strtoupper($fname[0]); ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/Logo.jpeg" alt="CM" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" id="dropdown-a" data-toggle="dropdown">Categories</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<?php 
									$i=0;
									while($i<=array_search(end($data_arr),$data_arr))
									{
										echo "<a class='dropdown-item' href='".$data_arr[$i].".php'>". $data_arr[$i] ."</a>";
										$i++;
									}
								?>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="order.php">Orders</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<?php 
						if(isset($_SESSION["logindatabase"]))
						{
							echo "<li class='nav-item active'><li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
						} 
						else
						{
							echo "<li class='nav-item active'><li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
						}
						?>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php echo strtoupper($fname[0]); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	
	<!-- End Stuff -->
	
	<!-- Start Customer Reviews -->
		<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Products</h2>
						<hr>
						<?php 
							$select="SELECT * FROM product WHERE catagory='$fname[0]';";
							$fire_select=mysqli_query($con,$select);
							if(!$fire_select)
							{
								echo mysqli_error($con);
							}
							while($row=mysqli_fetch_assoc($fire_select))
							{
								$img_src="./product_img/".$row["img"];
								$pd_name=$row["name"];
								$pd_price=$row["price"];
								$dis=$row["dis"];
								?>
									<h1><label for=""><?php echo strtoupper($pd_name); ?></label></h1>
									<img src="<?php echo $img_src; ?>" height="29%" width="29%"><br>
									<label for=""><?php echo $pd_price."/-"; ?></label><br>
									<h2><label for="">Discription:</label></h2>
									<p>
										<?php echo $dis; ?>
									</p>
									<form action="" method="post">
										<input type="submit" value="ORDER" name="order">
										<input type="hidden" name="pdname" value="<?php echo $pd_name; ?>">
										<input type="hidden" name="price" value="<?php echo $pd_price; ?>">
									</form>
									<hr>
								<?php
								if(isset($_POST["order"]))
								{
									$_SESSION["pname"] = $_POST["pdname"];
									$_SESSION["price"]=$_POST["price"];
									echo "<script>window.location.href = 'pay.php';</script>";
								}
							}
						?>
						<!-- <p>The reviews of regular customers of my work is here.</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Sunaina Rana</strong></h5>
								<h6 class="text-dark m-0">Housewife</h6>
								<p class="m-0 pt-3">It's a hard working crafter who is selling good and best quality handmade craft products.I myself visit this website very often even when i don't have anything to order as this website have beautiful crafts products.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Riya Bharadvaj</strong></h5>
								<h6 class="text-dark m-0">Entreprenuer</h6>
								<p class="m-0 pt-3">This is the best website for online shopping of crafts products.The product arrives as it appears.The nicely coloured combine paper crafts attracts more of this.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Sanjiv Bansal</strong></h5>
								<h6 class="text-dark m-0">Manager HR</h6>
								<p class="m-0 pt-3">The amazing website to order gift products or customized products.The crafter never lag behind to impress.This website is selling many creative items at reasonable prize.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+91 8866 851 028
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<a href="mailto:pratikjoshi091@gmail.com">pratikjoshi091@gmail.com</a>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Bhavnagar
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>This website will serve the platform for buying and selling of crafts products.By refering to the huge variety of gifting materials here you can find best.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<!-- <ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Bhavnagar</p>
					<p class="lead"><a href="#">+91 8866 851 028</a></p>
					<p><a href="mailto:pratikjoshi091@gmail.com">pratikjoshi091@gmail.com</a></p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2012 <a href="#">Crafty Magic</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>