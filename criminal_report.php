
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style >
body, html {
  height: 100%;

  /* The image used */
  background-image: url("crime.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container
{
   margin: auto;
  width: 75%;
 bottom: 50%;
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
button[type=submit] {
  width: 40%;
  background-color: #b19cd9;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
  </style>
  <script>
    // Yes, I added React just so I could get ES6
$('form').submit(function onSubmit(event) {
  event.preventDefault();
  var result = `Email: ${event.target.emailInput.value.trim()}\n`;
  result += `Password: ${event.target.passwordInput.value.trim()}\n`;
  result += `Full Name: ${event.target.nameInput.value.trim()}\n`;
  result += `Checkbox Checked: ${event.target.checkboxInput.checked.toString()}\n`;
  result += `Birthday: ${event.target.birthdayInput.value}\n`;
  result += `Maiden Name: ${event.target.maidenNameInput.value.trim()}\n`;
  $('.output').html(result);
});
  </script>


</head>

<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="user.php">Back</a>
  <a href="#contact">Contact</a>
  
</div>

<div class="container">
  <div class="row">
    <form method="POST" action="process.php" >
      <div class="col-md-6">
        <div class="form-group">
              <label class="col-md-3 control-label" for="selectbasic">Crime Type</label>
              <div class="col-md-9">
                <select id="selectbasic" name="type" class="form-control">
                  <option value="General Crime">General Crime</option>
                  <option value="Missing Person">Missing Person</option>
                  <option value="Missing Vehicle">Missing Vehicle</option>
                  <option value="Lost Items">Lost Items</option>
                </select>
              </div>
       


          <div class="form-group">
          <label for="exampleInputName">Informer Name</label>
          <input type="text" class="form-control" id="informer_name" placeholder="Name" name="informer_name">
        </div>
          <div class="form-group">
          <label for="exampleInputName">Informer User Name</label>
          <input type="text" class="form-control" id="informer_username" placeholder="User Name" name="informer_username">
        </div>
        </div>
          <div class="form-group">
          <label for="exampleInputName">Informer NIC </label>
          <input type="text" min="1" max="10" class="form-control" id="nic" placeholder="NIC" name="nic">
        </div>
           <div class="form-group">
              <label >Crime Location</label>
              <div class="col-md-10">
                <div class="row">
                  <div class="col-xs-6">
                    <input type="text" class="form-control" placeholder="District" name="district">
                  </div>
                  <div class="col-xs-6">
                    <input type="text" class="form-control" placeholder="City" name="city">
                  </div><br><br>
                  <div class="col-xs-6">
                    <input type="text" class="form-control" placeholder="Street" name="street">
                  </div>
                </div>
              </div>
            </div>
            <br><br><br>

          
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
             <input type='file' id='file' name="file">
            
          </div>
         
      </div>

      <div class="col-md-6">
     
  <br>
        <div class="form-group">
          <label for="exampleInputBirthday"><font color="gray">Crime Date</font></label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
          <label for="exampleMaidenName"><font color="gray">Crime Description</font></label>
          <textarea  rows="6" cols="60" name="description"></textarea>
          
        </div>
      </div>
                <button type="submit" name="submit" > SUBMIT </button>

    </form>
  </div>
  <div class="row spacer">
  </div>
 
</div>
</body>
</html>




