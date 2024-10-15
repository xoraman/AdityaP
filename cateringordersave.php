<?php
include("connection.php");

$user = $_POST["user"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$name = $_POST["name"];
$order = $_POST["order"];

$query = "INSERT INTO cateringOrder(username,name,phone,address,orders)";
$query .= "VALUES('$user', '$name', '$phone','$address','$order')";

 mysqli_query($con, $query);
    ?>