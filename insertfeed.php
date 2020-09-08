<?php
	include_once'database.php';
session_start();


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$name = $_POST['name'];
	$feed = $_POST['feed'];
	$service = $_POST['service'];


	$sql = "INSERT INTO feedback (email,name,feed,service) VALUES ('$email','$name','$feed','$service');";
	 mysqli_query($conn,$sql);


}

?>