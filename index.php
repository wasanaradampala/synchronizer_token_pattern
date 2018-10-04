<!DOCTYPE html>
<html>
<head>
<title>Cross Site Request Forgery </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    text-align: center;
}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.user {
    width: 10%;
    border-radius: 5%;
}

.container {
    padding: 16px;
    text-align: center;
}

}
</style>
</head>
<body>
<h1>Cross-Site Request Forgery-Synchronizer Token Pattern</h1>
<h2 style="text-align:center;color:blue;" >Login Form</h2>

<form action="response.php" method="post">
  <div class="imgcontainer">
    <img src="user.png" alt="User" class="user">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        <br>
    <button type="submit">Login</button>
 
</form>

</body>
</html>

