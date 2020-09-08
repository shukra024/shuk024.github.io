<?php
include_once 'date.php';
$result = mysqli_query($conn,"SELECT * FROM crime_report");
?>
<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <title> Comments</title>
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
.table
{
	background-color: white;
  color: black;
  height: 10px;
  column-gap: 100px;
}

</style>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="interface.html">Back</a>
  <a href="#contact">Contact</a>
  
</div><br><br>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-bordered">

   <thead>
   <tr class="danger">
<th scope="col">Type</th>
<th scope="col">Informer Name</th>
<th scope="col">NIC</th>
<th scope="col">District</th>
<th scope="col">City</th>
<th scope="col">Street</th>
<th scope="col">Image</th>
<th scope="col">Date</th>
<th scope="col">Description</th>
</tr>
</thead>	

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
 <tbody>
    <tr class="info">
<td><?php echo $row["type"];?></td>
<td><?php echo $row["informer_name"];?></td>
<td><?php echo $row['nic'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['street'];?></td>
<td><img src="<?php echo "img src='",$row['file'],"' width='175' height='200' />";?>"class="img-responsive"></td>
<td><?php echo $row['crime_date'];?></td>
<td><?php echo $row['crime_description'];?></td>
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>

