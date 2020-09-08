<?php

session_start();

if(isset($_POST['login']))
{
	include_once'database.php';

	$uid = mysqli_real_escape_string($conn,$_POST['name']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pass']);

	if(empty($uid)||empty($pwd))
	{
		echo "error empty field";
	}

	else
	{
		$sql = "SELECT * FROM user WHERE user_id = '$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1)
		{
			echo "no user found";
		//header("Location:./index.php?username=error");	
			
		}

		else
		{
			$sql = "SELECT * from user WHERE user_id= '$uid';";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			
			if($row['login'] == $pwd)
			{
				session_start();
				$_SESSION['u_id']    = $row['name'];

				header("Location: ./user.php?Login=success");

			}
			else
			{
				echo "error";
			}



		}

	}

}