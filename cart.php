<?php
    // $user = '';
    $user = $_GET['user'];
	// $id = $_POST['id'];

    include("connection.php");
    $query = "SELECT * FROM cart";
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
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity in Kg</th>
									<!-- <th class="product-total">Total</th> -->
								</tr>
							</thead>
							<tbody>
							<?php
								while($row = mysqli_fetch_assoc($result))
								{
									if($row['username'] == $user)
									{
							?>
								<tr class="table-body-row">
								<div class="col-lg-4 col-md-6 text-center berry">
									<td>
									
									<a onclick="return confirm('Sure to delete?')" href="removeFromCart.php?user=<?php echo $row["username"] ?>&prod_name=<?php echo $row["prod_name"] ?>">Delete</a>
								    </td>
									<td class="product-name"><?php echo $row["prod_name"]; ?></td>
									<td class="product-price"><?php echo $row["prod_price"]; ?></td>
									<td class="product-quantity"><input type="number" value="<?php echo $row["quantity"]; ?>" ></td>
									<!-- <td class="product-total">1</td> -->
									<td class="product-remove"><a href="#"><i class="far fa-save"></i></a></td>
								</tr>
								<?php
									}
									}

								?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>Rs. 700</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>Rs. 50</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>Rs. 750</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="checkout.php?user=<?php echo $user?>" class="boxed-btn black">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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