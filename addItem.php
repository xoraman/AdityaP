<?php
 $user = $_POST['user'];
require 'connection.php';

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $price=$_POST["price"];
    if($_FILES["image"]["error"] === 4)
    {
        echo
        "<script> alert('Image Does Not Exist'); </script>"
        ;
    }
    else
    {
        $filename=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["image"]["tmp_name"];

        $validImageExtension= ["jpg" ,"jpeg", "png"];
        $imageExtension= explode('.',$filename);
        $imageExtension= strtolower(end($imageExtension));
       

        if(!in_array($imageExtension, $validImageExtension)){
            echo
            "<script> alert('Invalid Image Extension'); </script>"
            ;
        }

        else if($fileSize > 1000000){
            echo
            "<script> alert('Image size is too large'); </script>"
            ;
        }
        else{
           
            $newImageName = uniqid();
            $newImageName .= '.'.$imageExtension;

            move_uploaded_file($tmpName , 'ItemList/'.$newImageName);
            $query = "INSERT into products VALUES('','$newImageName','$name','$price')";

            mysqli_query($con,$query);
		            }

       
    }

}
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
						<nav class="main-menu">
							<ul>
								<li><a href="adminIndex.php">Home</a></li>
								<li><a href="adminaccs.php">Users</a></li>
								<li><a href="adminOrdes.php">Orders</a></li>
								<li><a href="#">Add Item</a></li>
								<li><a href="logIn.html">LogOut</a></li>
								<li><h3><?php echo $user; ?></h3></li>	
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
	<div class="breadcrumb-section ">
		<div class="container">
			<div class="row">
            <h2  align="center" style="font-family : monotype;"><span class="px-2"><b>Add Products Here</b></span></h2>
    <br><br>
   
            <div class="row px-xl-5"  style="align-self:center;">
            <div class="col-lg-12 mb-5" style="align-content:center;">
                <div class="contact-form">
                    
                    <form  method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                        <div class="control-group">

                       <!-- <input type="hidden" name="id" value=-->
                            
                            <input type="text" class="form-control" name="name" placeholder="*Product Name"
                                required="required"
                                style="border-color:black;"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <br>
                        <div class="control-group">
                            <input type="text" class="form-control" name="price" placeholder="*Toy's Price"
                                required="required"
                                style="border-color:black;"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <br>
                        <div class="control-group">
                            <input type="file" name="image" value="image" accept=".jpg , .jpeg , .png" class="form-control" 
                             placeholder="*Upload Product Image" required="required" 
                              />
                            <p class="help-block text-danger"></p>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit"  name="submit">
                                Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
		    </div>
		</div>
	</div>

	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150 text-center">
		<h2>Admin Panel</h2>
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