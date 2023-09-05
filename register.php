<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Sign up</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.css">

</head>

<br>

<body>
  <body style="background-color: rgb(160, 119, 199);"></body>
	<a href="Welcome.html"><img src="Images/University-of-Vavuniya-Logo-1024x1024.png" width="150" height="150"
	style="float: left; margin-right: 10px; padding: 2px;"></a>
	<h2><b>Sports Activity Management System</b></h2>
	<h2><b>University of Vavuniya</b></h2>
	<h2><b>Sri Lanka</b></h2><br>
	<hr>

	<img src="Images/sign-up-form.png" width="600" height="600"
	style="float:right ; margin-left: 80px; margin-right: 300px; margin-top: 100px; padding: 2px;">

	<div class="container">
  <h2 style="text-align: left;">Sign up</h2>
    <h5 style="text-align: left;">Already have an Account? <a href="Signin.php"> Sign in here </a></h5>
    <br>

  <form method='post' action='registerfunction.php'>
    <div class="form-group">
      <label for="text">First name</label>
      <input type="text" class="form-control" id="name"  name='fname' placeholder="Your First name" style="width: 250px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="text">Last name</label>
      <input type="text" class="form-control" id="lname" name='lname' placeholder="Your Last name" style="width: 250px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="text">Registraion number</label>
      <input type="text" class="form-control" id="reg number" name='regNum' placeholder="Eg: 2018/ASB/24" style="width: 210px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="email">Your E-mail</label>
      <input type="email" class="form-control" id="email"  name='email' placeholder="Eg: abc@gmail.com" style="width: 210px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="text">mobile number</label>
      <input type="text" class="form-control" id="mob"  name='mobile' placeholder="07XXXXXXXX" style="width: 210px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="Password" name='pass1' placeholder="Enter a Password" style="width: 210px">
    </div>
    <br>

    <div class="form-group">
      <label for="pwd">Re-enter password</label>
      <input type="password" class="form-control" id="Passwordcon"  name='pass2' placeholder="Confirm your password" style="width: 210px">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<br>
<br>
<br>

<footer class="text-center text-white" style="background-color: #3a3639;">
  <div class="container"></div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 All rights reserved:
    <br>
    <a class="text-white" href="https://vau.ac.lk/">University of Vavuniya, Sri Lanka</a>
  </div>
  </footer>

</body>
</html>