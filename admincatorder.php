<?php
include('connection.php');
$rows=mysqli_query($con,"SELECT * FROM cateringOrder");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>About</title>

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
							<a href="">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu" style='color:cyan;'>
							<ul>
								<li><a href="adminIndex.php">Home</a></li>
								<li><a href="adminUser.php">Users</a></li>
								<li><a href="adminOrder.php">Orders</a></li>
								<li><a href="#">Add Item</a></li>
								<li><a href="logIn.html">LogOut</a></li>
							
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- breadcrumb-section -->
	




    <div class="breadcrumb-section "> -->
		<!-- <br><br><br><br><br><br><br><br> -->
		<div class="container">
        <center>

<table style="color:white;">
    <tr>
        <th width="60">No.</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th width="130">Username</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th width="130">Name</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th width="150">Phone</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th width="120">address</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th width="100">order</th>&nbsp;&nbsp;&nbsp;
    </tr>
    <tr>
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>
    </tr>
    <tr>
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>
    </tr>
    <?php
        $count=1;
        foreach($rows as $row) :
    ?>
    <tr>
        <td><?php echo $count; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $row["username"]; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $row["name"]; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $row["phone"]; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $row["address"]; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $row["orders"]; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </tr>
    <tr>
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>&nbsp;&nbsp;
        <td></td>
    </tr>
    <?php

    $count++;
    endforeach;

    ?>
</table>

</center>


		</div>
	</div>







	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150 text-center">
		
	</div>
	<!-- end testimonail-section -->
	
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