<?php
session_start();
$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "crime";

$conn = mysqli_connect($server,$uname,$pass,$dbname);

if(isset($_POST['login']))
{

	$uid = mysqli_real_escape_string($conn,$_POST['id']);
	$pwd = mysqli_real_escape_string($conn,$_POST['password']);

	if(empty($uid)||empty($pwd))
	{
		echo "error empty field";
	}

	else
	{
		$sql = "SELECT * FROM officer WHERE officerid = '$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1)
		{
			echo "no user found";
		//header("Location:./index.php?username=error");	
			
		}

		else
		{
			$sql = "SELECT * from officer WHERE password = '$pwd';";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			
			if($row['password'] == $pwd)
			{
				session_start();
				$_SESSION['u_id']    = $row['officerid'];

				header("Location:./crimedisplay.php?Login=success");

			}
			else
			{
				echo "error";
			}



		}

	}

}