<?php
include_once'database.php';

?>

<!DOCTYPE html>
<html>
<head>
	
		<script type="text/javascript">
	      		
	      function checkpass(e)
		{
			var password = form.password.value;
			var repassword = form.repassword.value;
			if(password==repassword)
			{
				
			}

			else
			{
				document.getElementById('repass').style.borderColor='red';
				document.getElementById("confirm_password_error").removeAttribute("hidden");

  				e.preventDefault();	
  				return false;			
			}
		}
	      	</script>
</head>
<body>

<div class="container">
	<div class="row">

		<?php
		if(isset($_POST['submit']))
{

	
	$user_id = mysqli_real_escape_string($conn,$_POST['user_id']);


	$sql = "SELECT * FROM user WHERE  user_id='$user_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0) 
		{
			echo'
			<div class="col-lg-8 col-12 forget-container">
			<form name="form" method="POST" action="" onsubmit="return checkpass(event)">

			<div class="form-group">
				<input class="form-control" type="text" name="emai" value='.$email.' readonly>

			</div>

			<div class="form-group">
				<input class="form-control" type="text" name="nic" value='.$user_id.' readonly>

			</div>

			<div class="form-group">
				<input class="form-control" type="password" name="login" id="pass" placeholder="enter password" required> 
			</div>

			<div class="form-group">
				<input class="form-control" type="password" name="newpassword" id="repass" placeholder="re-enter password" required>
				<small class="name_error" id="confirm_password_error" hidden="">Password does not match</small> <br> <br>

			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="update" value="update password" onclick="checkpass()">

			</div>
			</form>
			
			</div>'
			;
		}
	}

		if(isset($_POST['update']))
		{
			$emai = mysqli_real_escape_string($conn,$_POST['email']);
			
			$newpass=mysqli_real_escape_string($conn,$_POST['password']);
			$hasedPwd = password_hash($newpass,PASSWORD_DEFAULT);
			$sql="UPDATE users SET password ='$hasedPwd' WHERE email='$email' ";
			$a=mysqli_query($conn,$sql);

			header("Location:./login.php?update=success");
			

		}

		

		?>
		
	</div>
	
</div>

</body>
</html>