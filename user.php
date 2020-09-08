<?php
session_start();

$name = $_SESSION['u_id'];

echo $name; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>USER HOME PAGE</title>
</head>
<style>
  .button {
  background-color:#E39FF6
  border: none;
  color:#9867C5;
  height: 90px;
  width:220px ;
  text-align: center;
  text-decoration:none;
  display: inline-block;
  font-size: 30px;
  font-color:purple;
  margin: 4px 2px;
  padding: 10px;
}
body, html {
  height: 100%;

  /* The image used */
  background-image: url("feed.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.nav {
  margin: 0;
  font-family: Verdana;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #FFFF00;
  color: black;
}
</style>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
</div>
<p><a href="edit.php">
<button class="button button4">Edit Profile</button>
</a></p><br>

<p><a href="criminal_report.php">
<button class="button button4">Raise Complaint</button>
</a></p><br>

<p><a href="feedback.php">
<button class="button button4">Feedback</button>
</body>
</html>