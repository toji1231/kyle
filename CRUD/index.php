<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Index</title>
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="#" class="logo">
                <img src="bby.jpg" alt="">
                <span class="nav-item"><?php echo $row["name"]; ?></span>
            </a>
        </li>
        <li><a href="#">
            <i class='bx bxs-home-alt-2'></i>
            <span class="nav-item">Home</span>
        </a></li>
        <li><a href="profile.php">
            <i class='bx bxs-face' ></i>
            <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="display.php">
            <i class='bx bxs-hard-hat' ></i>
            <span class="nav-item">Users</span>
        </a></li>
        <li><a href="#">
            <i class='bx bx-cog' ></i>
            <span class="nav-item">Settins</span>
        </a></li>
        <li><a href="work.php">
            <i class='bx bx-task' ></i>
            <span class="nav-item">Task</span>
        </a></li>
        <li><a href="#">
            <i class='bx bxs-help-circle' ></i>
            <span class="nav-item">Help</span>
        </a></li>
        <li><a href="#">
            <i class='bx bxs-contact' ></i>
            <span class="nav-item">Contact</span>
        </a></li>
        <li><a href="logout.php" class="logout" onclick="logout()">
            <i class='bx bxs-log-in-circle' ></i>
            <span class="nav-item">logout</span>
        </a></li>
    </ul>
  </nav>
  <div class="center">
            <h1>Welcome <?php echo $row["name"]; ?> to Manger Task</h1>
            <h2>You Want To Optimize Your Schedule?</h2>
            <div class="buttons">
                <button><a href="work.php">Click Here</a></button>
            </div>
        </div>
</body>
</html>