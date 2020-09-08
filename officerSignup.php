<?php

session_start();
$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "crime";

$conn = mysqli_connect($server,$uname,$pass,$dbname);
if(isset($_POST['submit']))
{

	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$city = mysqli_real_escape_string($conn,$_POST['city']);
	$nic = mysqli_real_escape_string($conn,$_POST['nic']);
	$officerId = mysqli_real_escape_string($conn,$_POST['officerId']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	if(empty($fname)||empty($lname)||empty($city)||empty($nic)||empty($officerId)||empty($email)||empty($password))
	{
		echo "empty fields";
	}


	else
	{
		$sql = "SELECT * FROM officer WHERE officerid = '$officerId'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		
		if($resultCheck > 0)
		{
			echo "Id already in use";
				
			
		}

		else
		{	
			

					$sql = "INSERT into officer (fname,lname,city,nic,officerid,email,password) VALUES ('$fname','$lname','$city','$nic','$officerId','$email','$password');";

					mysqli_query($conn,$sql);


					header("Location:./Ologin.html");



					
			
			

		}

	}

}

else
{
	//header("Location:./index.php?login=error");
	exit();
}

?>