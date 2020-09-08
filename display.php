<?php
include_once 'date.php';
$result = mysqli_query($conn,"SELECT * FROM feedback");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Comments</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <style> 
		body, html {
  height: 100%;

  /* The image used */
  background-image: url("display.jpg");

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
.table-bordered
{
  background-color: white;
}
</style>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="interface.html">Back</a>
  <a href="#contact">Contact</a>
  
</div>
<br><br>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class="table table-bordered">
    <thead>
  <tr>
    <td><b>Email</b></td>
    
    <td><b>Name</b></td>
    

    <td><b>Commentator</b></td>
  
    <td><b>Comment</b></td>
  </tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["email"]; ?></td>
   
    <td><?php echo $row["name"]; ?></td>
   
    <td><?php echo $row["feed"]; ?></td>
    
    <td><?php echo $row["service"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>