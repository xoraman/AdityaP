<?php
include("connection.php");

$user = $_GET["user"];
$prod_name = $_GET["prod_name"];

// Sanitize the input to prevent SQL injection
$prod_name = mysqli_real_escape_string($con, $prod_name);

echo $user;
echo $prod_name;

$query = "DELETE FROM cart WHERE username= '$user' And prod_name = '$prod_name'";
if (mysqli_query($con, $query)) {
    header("Location:cart.php?user=$user");
} else {
    echo "Error deleting product: " . mysqli_error($con);
}

?>