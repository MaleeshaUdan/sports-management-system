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
	<title>Home</title>

	<!--link rel="stylesheet" type="text/css" href="css/bootstrap.css"-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<!--link rel="stylesheet" href="bootstrap.css"-->

</head>

<br>

<body>
  <body style="background-color: rgb(160, 119, 199);"></body>
	<a href="Home.html"><img src="Images/University-of-Vavuniya-Logo-1024x1024.png" width="150" height="150"
	style="float: left; margin-right: 10px; padding: 2px;"></a>
	<h2><b>Sports Activity Management System Student Portal</b></h2>
	<h2><b>University of Vavuniya</b></h2>
	<h2><b>Sri Lanka</b></h2><br>
	<hr>

	<ul class="nav justify-content-center">
  <li class="nav-item">

    <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/Home.html" style="color:black;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: black">Sports</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Contact.php" style="color: black">Contact us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php" style="color: black">Log out</a>
  </li>
</ul>

	<h3 style="text-align: center; margin-top: 20px;"><b><i>What are you looking for?</i></b></h3>

<div class="row row-cols-1 row-cols-md-2 g-20" style="width: 35rem; margin-left: 30%; margin-top: 50px;">
  <div class="col">
    <div class="card">
      <img src="Images/Open_hours.png" class="card-img-top"
        alt="study time" />
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-style: italic;"><u>Open Hours</u></h5>
        <p class="card-text" style="font-weight: bold; color: darkslategray;" >
          Today 9.00a.m. to 4.15p.m.
          <br>
          <br>
          <a href="">Check out the Opening times</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Images/sports.png" class="card-img-top"
        alt="books" />
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-style: italic;"><u>Sports</u></h5>
        <p class="card-text" style="font-weight: bold; color: darkslategray;" >
          click <a href="">here to see, list of sports available</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col" style="margin-top: 50px;">
    <div class="card">
      <img src="Images/enroll.png" class="card-img-top"
        alt="Lost card" />
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-style: italic;"><u>Enroll for a sport</u></h5>
        <p class="card-text" style="font-weight: bold; color: darkslategray;" >
          click <a href="GetnewCard.php">here to enroll for a new sport</a></p>
      </div>
    </div>
  </div>
  <div class="col" style="margin-top: 50px;">
    <div class="card">
      <img src="Images/sports_events.png" class="card-img-top"
        alt="fine" />
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-style: italic;"><u></u>Upcoming Sports Events</u></h5>
        <p class="card-text" style="font-weight: bold; color: darkslategray;">
          Click <a href=""> here to check for upcoming sport events</a>
        </p>
      </div>
    </div>
  </div>
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
