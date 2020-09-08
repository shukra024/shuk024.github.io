
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style> 
		body, html {
  height: 100%;

  /* The image used */
  background-image: url("user1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.container
{
	position: absolute;
	left: 10px;
	top: 65px;
	margin: auto;
  width: 50%;
  border: 3px solid purple;
  padding: 10px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #b19cd9;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
</head>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="feedback.php">FeedBack</a>
  <a href="#contact">Contact</a>
  
</div>
<center>
	<div class="container">
<div class="floating-box">

<form method="post" action="loginuser.php">


   <b><center><font size = "4"><label for="uname" style="font-family:Lucida Console  ">User ID</label></font></center></b>
   <input type="text" id="user_id" name="name" style="font-family:Lucida Console  "><br><br>

   <b><center><font size = "4"><label for="pwd">Password</label></font></center></b>
   <input type="password" id="pass" name="pass"><br><br>

   <b><font size = "4"><input name="login" type="submit" id="submit" value="LOGIN" style="color:purple"></font></b><br>

<p>New User <a href="signup.php">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
		  }
		  ?>

		  </div>
 </center>
</form>

</div>
<center>
</body>
</html>