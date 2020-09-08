<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	<style >
	body, html {
  height: 100%;

  /* The image used */
  background-image: url("fee.jpg");

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
	left: 35%;
	top: 65px;
	margin: auto;
  width: 30%;
  border: 3px solid purple;
  padding: 10px;
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
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
button[type=submit] {
  width: 100%;
  background-color: #b19cd9;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="user.php">Back</a>
  <a href="#contact">Contact</a> 
</div>

<div class="container">
<font size="+5" style = "font-family:Candara;" color="white"><b><left>FEEDBACK</left></b></font><br><br>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	
	<form action="insertfeed.php" method="post">
		<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> 
    

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<select class="form-control" name="feed">
			<option selected=""> Give Feedback as</option>
			<option value="Student">Student</option>
			<option value="Worker">Worker</option>
			<option value="Other">other</option>
		</select>
	</div> <!-- form-group end.// -->
   
        
   <label  ><b>What you think about our Service </b></label>
        <table>
                                            <tr>
                                                <td>

                                                  <input type="radio" id="like" name="service" value="like">
                                                  <label for="like">Like</label><br>

                                                    
                                                </td>
                                                <td>
                                                      <input type="radio" id="dislike" name="service" value="dislike">
                                                  <label for="dislike">Doesn't Like</label><br>
                                                </td>
                                                <td>
                                                     <input type="radio" id="improve" name="service" value="improve">
                                                  <label for="improve">Can Improve</label><br>
                                                </td>
                                                
                                        </table><br> <!-- form-group// -->
                                       
    <div class="form-group">

        <button type="submit" name="submit" > SUBMIT </button>
    </div> <!-- form-group// -->      
            


</form>
</article>
</div> <!-- card.// -->

</div> 

</body>
</html>