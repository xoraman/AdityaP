
<?php
    // $user = '';
    $user = $_GET['user'];

    include("connection.php");
    $query = "SELECT * FROM cart where username='$user'";
    $result = mysqli_query($con, $query);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logon.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
							<li><a href="index_2.php?user=<?php echo $user ?>">Home</a></li>
								<li><a href="about.php?user=<?php echo $user ?>">About</a></li>
								<li><a href="cateringOrder.php?user=<?php echo $user ?>">Carering orders</a></li>
								<li><a href="contact.php?user=<?php echo $user ?>">Contact</a></li>
								<li><a href="shop.php?user=<?php echo $user ?>">Shop</a></li>
								<li>
									<div class="header-icons">
										<?php
										if($user != '')
										{
									    ?>
										<a href="#"><?php echo $user; ?> </a>
										<?php
										}
										else
										{
										?>
										<a href="logIn.html">Log In </a>
									    <?php
										}
										?>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<form method="post" action="placeOrder.php">
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        		<p><input type="text" name="name" style="width:90%; height:50px;" placeholder="Name"></p>
						        		<p><input type="email" name="email" style="width:90%; height:50px;" placeholder="Email"></p>
						        		<p><input type="text" name="address" style="width:90%; height:50px;" placeholder="Address"></p>
						        		<p><input type="tel"  name="phone" style="width:90%; height:50px;"placeholder="Phone"></p>
									<center>
									<img src="./assets/img/QR_aditya.jpeg" style="height:500px; width:360x;">
									</center>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<?php
								$total = 0;
								$order = "";
								while($row = mysqli_fetch_assoc($result))
								{
								$total += $row['prod_price'];
								$order .= $row['prod_name']." ".$row['prod_price']." ".$row['quantity'];
								?>
								<tr>
									<td><?php echo $row['prod_name']?></td>
									<td><?php echo $row['prod_price']?></td>
								</tr>
								<?php
									}
								?>
								
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td><?php echo $total ?></td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>Rs.50</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>Rs. <?php echo $total + 50 ?></td>
								</tr>
							</tbody>
						</table>

						<input type="hidden" name="user" value="<?php echo $user ?>">
						<input type="hidden" name="order" value="<?php echo $order ?>">
						<input type="hidden" name="total" value="<?php echo $total ?>">
						<input type="submit" value="Place Order" class="boxed-btn"></input>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	<!-- end check out section -->
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Welcome to Chavare Sweets,
							Our passion for crafting delectable sweets like gulab jamun, laddu,etc. ensuring each bite is a nostalgic delight. Whether it's a
							wedding, reception, or any special event, our catering services bring the essence of 
							Indian sweets to your gatherings, leaving a lasting impression on your guests.</p>
					</div>

				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Chavare Mala, Rangoli</li>
							<li>Tal - Hatkanangale  Dis - Kolhapur</li>
							<li>+91 9011922745</li>
							<li>+91 9822186878</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index_2.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>