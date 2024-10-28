<html>
    <body>
<?php

require 'connection.php';

$user=$_POST["username"];
$pass=$_POST["password"];

$query="SELECT * from accounts WHERE username='".$user."' AND password='".$pass."'";
$result=mysqli_query($con,$query);
if($user=="admin" && $pass=="1234")
{
?>
   <form action="adminindex.php" method="post" id="form">
        <input type="hidden" name="user" value="admin">
   </form>
   <script>
document.getElementById("form").submit();

</script>
   <?php
   //header("Location:adminindex.php");
}
elseif(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);

    $username=$row["username"];
    ?>
<form action="index_2.php" method="get" id="form">
    <input type="hidden" name="user" value="<?php echo $username; ?>">
    <!-- <input type="hidden" name="id" value="<?php echo $row["id"] ?>"> -->
</form>
<script>
document.getElementById("form").submit();
</script>

<?php
}
else
{
    echo '<script>alert("Invalid Username or Password");</script>'; 
    header("Location:logIn.html");
}
?>
</body>
</html>