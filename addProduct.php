<?php
require './connection.php';

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
            $query = "INSERT into products VALUES('','$newImageName','$name','$price)";

            mysqli_query($con,$query);
        }

       
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>

.dropbtn {
  font-size: 16px;
  border: none;
 padding-top: 9px ;
  background-color: white;
  border-color:white;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: white;
  border-color:white;
}

.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  overflow: auto;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
 display:block;
}
.show {display: block;}
    

#counter{
    font-weight:bolder;
     color:black; 
     font-size:100px; 
     
}
</style>
</head>

<body>
                <div class="contact-form">
                    
                    <form  method="POST" action="addProduct.php" autocomplete="off" enctype="multipart/form-data">
                        <div class="control-group">

                       <!-- <input type="hidden" name="id" value=-->
                            
                            <input type="text" class="form-control" name="name" placeholder="*Product Name"
                                required="required"
                                style="border-color:black;"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="price" placeholder="*Toy's Price"
                                required="required"
                                style="border-color:black;"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            Upload Product Image
                            <input type="file" name="image" value="image" accept=".jpg , .jpeg , .png" class="form-control" 
                             placeholder="*Upload Product Image" required="required" 
                              />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit"  name="submit">
                                Add Product</button>
                        </div>
                    </form>
                </div>
            </div>

    <!-- Contact End -->


</body>

</html>