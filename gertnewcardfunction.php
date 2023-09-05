<?php
require_once 'dbconfig.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $sport = strtoupper($_POST['sport']);
    $fname = strtoupper($_POST['fname']);
    $lname = strtoupper($_POST['lname']);
    $regnum = $_SESSION['regnum']; 
    $email = $_POST['email'];

   
    $sport = mysqli_real_escape_string($conn, $sport);
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = mysqli_real_escape_string($conn, $email);

    $sql = "INSERT INTO sports (sport, fname, lname, regNum, email) VALUES ('$sport', '$fname', '$lname', '$regnum', '$email')";

    if (mysqli_query($conn, $sql)) {
       
        echo '<script>alert("Data inserted successfully!");</script>';
        echo '<script>window.setTimeout(function(){window.location.href = "Getnewcard.php";}, 100);</script>';
    } else {
       
        echo '<script>alert("Unsuccessful");</script>';
        echo '<script>window.setTimeout(function(){window.location.href = "Getnewcard.php";}, 100);</script>';
    }
}
mysqli_close($conn);
?>
