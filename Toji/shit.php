<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Index</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="sss.webp">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Developer</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="display.php">Edit Profile</a></li>
                <a href="logout.php">Logout</a>
            </ul>
        </nav>
        <div class="center">
            <h1>Welcome to Schedue Task</h1>
            <h2>You Want To Optimize Your Schedule?</h2>
            <div class="buttons">
                <button><a href="homepage.php">Click Here</a></button>
            </div>
        </div>
    </div>
  </div>
</body>
</html>