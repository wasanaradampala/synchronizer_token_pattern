<?php
//login validation 
if(isset($_POST['uname'],$_POST['pwd'])){
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo 'you are Successfully logged in';
		
	}
	else{
		echo 'Invalid Credentials Try again !';
		exit();
	}
	
}

?>
<!DOCTYPE html>
<html>
	<head>
    <title>Cross Site Request Forgery </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	    $(document).ready(function(){
	
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
          // Typical action to be performed when the document is ready:
			    document.getElementById("csrf_token").setAttribute('value', this.responseText) ;
		    }
	
	
	    };
	
	    xhttp.open("GET", "tokenGenerator.php", true);
	    xhttp.send();
	
	    });
    </script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}


</style>
</head>

<body>
        

<form action="userValid.php" method="post">

  <div class="container">

<div class="row">
  <div class="col-25">
    <label for="uname">First Name</label>
  </div>
  <div class="col-75">
    <input type="text" id="fname" name="addname" placeholder="Your name.."required>
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label for="lname">Last Name</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label for="country">Country</label>
  </div>
  <div class="col-75">
    <select id="country" name="country">
      <option value="australia">Sri Lanka</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label for="subject">Subject</label>
  </div>
  <div class="col-75">
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  </div>
</div>
<div class="row">
<br>
<input type="submit" value="Submit">
<br>
<input type="hidden" name="csrf" value="" id="csrf_token"/>

</div>

 
</form>


</body> 
</html>
