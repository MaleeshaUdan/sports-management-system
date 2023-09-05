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
	
	<title>Contact Us</title>
	
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


<h2 align="center"> <u>Contact us</u> </h2>
<br>

<div>
	<img src="images/Lovepik_com-401266593-customer-service-contact-vector-illustration.png" alt="contact us" width="300" height="300" 
	style="float: right; margin-top: 30px; margin-right: 300px;">
</div>

<div>
    <h3> &nbsp &nbsp <u> Telephpone</u></h3>
    <p style="font-weight: bolder;">&nbsp &nbsp &nbsp &nbsp Call us : 0242228239</p>
    <h3> &nbsp &nbsp <u> E-mail</u></h3>
    <p style="font-weight: bolder;">&nbsp &nbsp &nbsp &nbsp E mail us : <a href="#"> sports@vau.ac.lk</a></p>
    <h3> &nbsp &nbsp <u> Website</u></h3>
    <p style="font-weight: bolder;">&nbsp &nbsp &nbsp &nbsp Go to our Website : <a href="#"> Sports activity unit of University of Vavuniya</a></p>
    <h3> &nbsp &nbsp <u> FAX</u></h3>
    <p style="font-weight: bolder;">&nbsp &nbsp &nbsp &nbsp FAX us : 024 22 20279</p>
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