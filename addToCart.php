<?php
include("connection.php");
$id = $_POST["id"];

$user = $_POST["user"];
$prod_name= $_POST["prod_name"];
$prod_price = $_POST["prod_price"];
echo $id;
echo $user;
echo $prod_name;
echo $prod_price;


$query = "INSERT INTO cart(username, prod_name, prod_price) ";
$query .= "VALUES('$user', '$prod_name', '$prod_price')";

 mysqli_query($con, $query);
 header("Location:cart.php?user=$user");

?>