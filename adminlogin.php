<?php
session_start();
$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "crime";

$conn = mysqli_connect($server,$uname,$pass,$dbname);
if(isset($_POST['signin']))
{

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	if(empty($username)||empty($password))
	{
		// $loginerror = 2;
		// $name = "test";
	}


	else
	{
		$sql = "SELECT * FROM admin WHERE username = '$username'";	
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		
		if($resultCheck < 1)
		{
			

		//header("Location:./index.php?username=error");

				
			
		}

		else
		{	
			if($row = mysqli_fetch_assoc($result))
			{
				//dehashing the password
				// $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
				

				if($password != $row['password'])
				{	
					$loginerror=0;

	              $name = "ok da";
	

				}
				else
				{
					//login the user here
					$_SESSION['username']    = $row['username'];
					

					



					$name = $_SESSION['username'];
					
					header("Location:./interface.html");





					//exit();
				}
			
			}

		}

	}

}

else
{
	//header("Location:./index.php?login=error");
	exit();
}

?>