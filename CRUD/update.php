<?php
require 'config.php';
$id=$_GET['updateid'];
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

    $sql="update `tb_user` set id=$id,name='$name',username='$username',email='$email',password='$password'";
    $result=mysqli_query($conn,$sql);
    
    if($result){
         echo "<script> alert('Updated successfully'); </script>";
         header('location: display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>UPDATE</title>
</head>
<body>
<form action="" method="post" autocomplete="off">
        <h2>UPDATE User</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required value="">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required value="">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value="">
        <label for="confirmpassword">Confirm password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value="">
        <button type="submit" name="submit">Update</button>
       <p><a href="display.php">Back</a></p>
    </form>
    <br>
</body>
</html>