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
<link rel="stylesheet" href="p.css">
  <title>Your Name - Web Developer</title>
</head>
<body>

  <header>
  <div id="profile-pic" class="circular-img">
      <img src="bby.jpg" alt="Profile Picture">
    </div>
    <div class="container">
      <h1><?php echo $row["name"]; ?></h1>
      <p>Web Developer</p>
    </div>
  </header>

  <nav>
    <div class="container">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="index.php">Back</a></li>
      </ul>
    </div>
  </nav>

  <section id="about">
    <div class="container">
      <h2>About Me</h2>
      <p>
      Hi there! I'm Brint Kyle, a passionate and aspiring IT professional currently in my first year of college. My journey into the world of technology began with a curiosity about how things work and a desire to create innovative solutions.
    </p>
    <p>
      During my first year, I've been introduced to the fundamentals of programming, computer science, and web development. Exploring languages like Python and Java has been an exciting challenge, and I'm eager to delve deeper into the world of coding.
    </p>
    <p>
      Apart from programming, I'm also gaining insights into areas such as databases, system analysis, and networking. I believe in the power of continuous learning and am actively seeking opportunities to expand my skills and knowledge.
    </p>
    <p>
      In my free time, you'll find me working on small coding projects, participating in coding challenges, and exploring the latest trends in technology. I'm excited about the potential of technology to make a positive impact on people's lives, and I'm committed to contributing my skills to this dynamic field.
    </p>
    <p>
      Let's connect and explore the possibilities together. Feel free to reach out to me through the <a href="#contact">Contact</a> section below. I look forward to sharing my journey and collaborating on exciting projects!
    </p>
    </div>
  </section>

  <section id="skills">
    <div class="container">
      <h2>Skills</h2>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>React</li>
      </ul>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <p>Feel free to reach out to me: Kyledeleon59@gmail.com</p>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 <?php echo $row["name"]; ?>. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
<header>
    