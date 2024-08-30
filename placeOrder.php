<?php
require 'C:\Users\AMAN\Downloads\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
include("connection.php");

$user = $_POST["user"];
$name= $_POST["name"];
$email = $_POST["email"];
$address= $_POST["address"];
$phone = $_POST["phone"];
$order= $_POST["order"];
$total = $_POST["total"];
echo $user;
echo $name;
echo $email.$address.$phone.$order.$total;



$query = "INSERT INTO orders(username,name,email,address, phone, products,total)";
$query .= "VALUES('$user', '$name', '$email','$address','$phone','$order','$total')";

 mysqli_query($con, $query);
 header("Location:cart.php?user=$user");

    ?>