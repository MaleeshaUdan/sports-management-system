<?php
    session_start();

    if (!isset($_SESSION["regnum"])) {
        echo '<script>alert("Session expired or not logged in."); window.location.href = "signin.php";</script>';
        exit;
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Get a new card</title>

	<!--link rel="stylesheet" type="text/css" href="css/bootstrap.css"-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<!--link rel="stylesheet" href="bootstrap.css"-->

</head>

<br>

<body>
  <body style="background-color: rgb(160, 119, 199);"></body>
	<a href="Welcome.html"><img src="Images/University-of-Vavuniya-Logo-1024x1024.png" width="150" height="150"
	style="float: left; margin-right: 10px; padding: 2px;"></a>
	<h2><b>Sports Activity Management System Student Portal</b></h2>
	<h2><b>University of Vavuniya</b></h2>
	<h2><b>Sri Lanka</b></h2><br>
	<hr>

	<img src="Images/vecteezy_3d-bill-payment-with-credit-card-and-financial-security-for_11993276_539.png" width="400" height="228"
	style="float:right ; margin-left: 80px; margin-right: 300px; margin-top: 200px; padding: 2px;">

	<div class="container">
  <h2 style="text-align: left;">Enrol for new sport</h2>
    <h5 style="text-align: left;">Do you want to enroll for a new sport?</a></h5>
    <h5><b>fill this one</b></h5>
    <br>

  <form method="POST" action="gertnewcardfunction.php">

    <div class="form-group">
      <label for="sport">Select Sport</label>
      <div class="dropdown">
        <select class="form-control dropdown-toggle" id="sport" name='sport' style="width: 250px" required>
          <option>Badminton</option>
          <option>Carrom</option>
          <option>Chess</option>
          <option>Cricket</option>
          <option>Elle</option>
          <option>High Jump</option>
          <option>Karate</option>
          <option>Long Jump</option>
          <option>Table Tennis</option>
          <option>Track events</option>
          <option>Tripple Jump</option>
        </select>
      </div>
    </div>
    <br>

    <div class="form-group">
      <label for="text">First name</label>
      <input type="text" class="form-control" id="fname" name='fname' placeholder="Your First name" style="width: 250px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="text">Last name</label>
      <input type="text" class="form-control" id="lname" name ='lname' placeholder="Your Last name" style="width: 250px" required>
    </div>
    <br>

    <div class="form-group">
      <label for="email">Your E-mail</label>
      <input type="email" class="form-control" id="email" name='email' placeholder="Eg: abc@gmail.com" style="width: 210px" required>
    </div>

    <br>

    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>
</div>

<br>
<br>
<br>

<div class="footer">
	<div class="footer-copyright text-center py-3">© 2022 All rights reserved :
    <a href="https://vau.ac.lk/">University of Vavuniya, Sri Lanka</a>
  </div>
</div>

</body>
</html>