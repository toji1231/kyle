<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="work.css">
    <script src="index.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Your Task Schedule <?php echo $row["name"]; ?> </h1>
    <div id="task-form">
      <input type="text" id="task-input" placeholder="Add a new task">
      <select id="task-category">
        <option value="personal">Personal</option>
        <option value="work">Work</option>
        <option value="study">Study</option>
      </select>
      <input type="date" id="task-due-date">
      <button onclick="addTask()">Add Task</button>
      <a href="index.php">Back</a>
    </div>
    <ul id="task-list"></ul>
  </div>
 
</body>
</html>