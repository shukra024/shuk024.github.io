<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
 
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="style.css" rel="stylesheet" type="text/css">
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
	top: 60px;
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
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
</div>
<center>
	<div class="container">
<div class="floating-box">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <b><font size = "4"><label  style="font-family:Lucida Console  " > User Id</label></font></b>
   <input type="text" id="name" name="user_id"><br><br>

   <b><font size = "4"><label  style="font-family:Lucida Console">Password</label></font></b>
   <input type="password" id="login" name="login"><br><br>
     
   <b><font size = "4"><label  style="font-family:Lucida Console"> Confirm Password </label></font></b>
   <input type="password" id="pass" name="pass"><br><br>

   <b><font size = "4"><label for="uname" style="font-family:Lucida Console">Name</label></font></b>
   <input type="text" id="name" name="name"><br><br>
       
   <b><font size = "4"><label for="uname" style="font-family:Lucida Console">Email Id</label></font></b>
   <input type="text" id="email" name="email"><br><br>
    
   <B><input type="submit" name="submit" value="SIGNUP" style="color:purple"></B>
	<a href="login.php"Login here><p>Already Member </a></p>
                              

</form>
</div>
</div>
</center>
</body>
</html>