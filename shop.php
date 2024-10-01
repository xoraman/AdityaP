<?php
    $user = '';
    $user = $_POST['user'];
	$id = $_POST['id'];
	include('connection.php');
    $prolist=mysqli_query($con,"SELECT * From products");
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
	
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index_2.php">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Catering Services</a>
									<ul class="sub-menu">
										<li><a href="news.html">Catering Materials On Rent</a></li>
										<li><a href="news.html">Catering Packages</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a>Shop</a>
									<ul class="sub-menu">
										<form action="shop.php" method="post">
											<input type="hidden" name="user" value="<?php echo $user ?>">
											<input type="hidden" name="id" value="<?php echo $id ?>">
											<li><input type="submit" value ="Shop" style="background-color:white;"></li>
										</form>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
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
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<form method="post" action="addToCart.php">
					<?php 
						$product_name = "chivada";
						$product_price = "180";
					?>
					<input type="hidden" name="user" value="<?php echo $user ?>">
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="hidden" name="prod_name" value="<?php echo $product_name ?>">
					<input type="hidden" name="prod_price" value="<?php echo $product_price ?>">
				
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/bhajaka chivada.jpg" alt=""></a>
						</div>
						<h3><?php echo $product_name ?></h3></h3>
						<p class="product-price"><span>Per Kg</span> Rs. <?php echo $product_price ?></p>
						<!-- <a href="single-product.html" class="cart-btn">View</a> -->
						<input type="submit" value="Add to Cart" class="cart-btn" /><i class="fas fa-shopping-cart"></i>
						<!-- <a href="cart.php?id=<?php echo $id; ?>&user=<?php echo $user; ?>" ><i class="fas fa-shopping-cart"></i> </> -->
					</div>
					</form>
				</div>
				<?php
					 while($row = mysqli_fetch_assoc($prolist)){
				?>
				<div class="col-lg-4 col-md-6 text-center strawberry">
				
					<form method="post" action="addToCart.php">
					<input type="hidden" name="user" value="<?php echo $user ?>">
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="hidden" name="prod_name" value="<?php echo $row["prod_name"]; ?>">
					<input type="hidden" name="prod_price" value="<?php echo $row["price"]; ?>">
				
					<div class="single-product-item">
						<div class="product-image">
							<img src="C:\xampp\htdocs\Catering\ItemList\"<?php echo $row["img_name"]; ?>.jpg" alt="1">
						</div>
						<h3><?php echo $row["prod_name"]; ?></h3></h3>
						<p class="product-price"><span>Per Kg</span> Rs. <?php echo $row["price"]; ?></p>
						<!-- <a href="single-product.html" class="cart-btn">View</a> -->
						<input type="submit" value="Add to Cart" class="cart-btn" /><i class="fas fa-shopping-cart"></i>
						<!-- <a href="cart.php?id=<?php echo $id; ?>&user=<?php echo $user; ?>" ><i class="fas fa-shopping-cart"></i> </> -->
					</div>
					</form>
				</div>
				<?php
					}
                ?>
			</div>
		</div>
	</div>
	<!-- end products -->
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