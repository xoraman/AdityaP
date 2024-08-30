<?php
    include('connection.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO accounts (username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($con,$query);
    header('Location:logIn.html');
?>