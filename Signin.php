<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Sign in</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.css">


</head>

<br>

<body>
  <body style="background-color: rgb(160, 119, 199);">
	<a href="Welcome.html"><img src="Images/University-of-Vavuniya-Logo-1024x1024.png" width="150" height="150"
	style="float: left; margin-right: 10px; padding: 2px;"></a>
	<h2><b>Sports Activity Management System</b></h2>
	<h2><b>University of Vavuniya</b></h2>
	<h2><b>Sri Lanka</b></h2><br>
	<hr>

<img src="Images/Mobile-login-Cristina.png" width="600" height="600"
	style="float:left ; margin-left: 10px; margin-right: 30px; padding: 2px;">

<div class="container" style="margin-top: 160px;">
  <h2 style="text-align: left;">Sign in</h2>

  <form method='post' action='checksignin.php'>
    <div class="form-group">
      <label for="text">Registration number:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="20XX/XXX/0XX" style="width: 210px" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" style="width: 210px" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>


<br>

<footer class="text-center text-white" style="background-color: #3a3639; position: fixed; bottom: 0; width: 100%;">
  <div class="container"></div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 All rights reserved:
    <br>
    <a class="text-white" href="https://vau.ac.lk/">University of Vavuniya, Sri Lanka</a>
  </div>
</footer>


</body>
</html>