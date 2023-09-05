<?php
require_once 'dbconfig.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = strtoupper($_POST['fname']); 
    $lname = strtoupper($_POST['lname']); 
    $regNum = $_POST['regNum'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $regNum = mysqli_real_escape_string($conn, $regNum);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $pass1 = mysqli_real_escape_string($conn, $pass1);
    $pass2 = mysqli_real_escape_string($conn, $pass2);

    
    $checkRegNumQuery = "SELECT * FROM User WHERE regNum = '$regNum'";
    $result = mysqli_query($conn, $checkRegNumQuery);

    if (mysqli_num_rows($result) > 0) {
        
        echo '<script>alert("Registration number already exists. Please choose a different one.");</script>';
        echo '<script>window.setTimeout(function(){window.location.href = "register.php";}, 100);</script>';
    } elseif ($pass1 !== $pass2) {
        
        echo '<script>alert("Passwords do not match. Please try again.");</script>';
        echo '<script>window.setTimeout(function(){window.location.href = "register.php";}, 100);</script>';
    } else {
        
        $hashedPassword = password_hash($pass1, PASSWORD_DEFAULT);

        
        $insertUserQuery = "INSERT INTO User (regNum, password) VALUES ('$regNum', '$hashedPassword')";
        if (mysqli_query($conn, $insertUserQuery)) {
            
            $insertUserDetailsQuery = "INSERT INTO user_details (regNum, fname, lname, email, mobile) VALUES ('$regNum', '$fname', '$lname', '$email', '$mobile')";
            if (mysqli_query($conn, $insertUserDetailsQuery)) {
                // Registration successful, show success message and redirect to signin.php
                echo '<script>alert("Registration successful! You can now sign in.");</script>';
                echo '<script>window.setTimeout(function(){window.location.href = "signin.php";}, 100);</script>';
            } else {
                // Insertion into user_details failed, show error message and redirect
                echo '<script>alert("Registration failed. Please try again later.");</script>';
                echo '<script>window.setTimeout(function(){window.location.href = "register.php";}, 100);</script>';
            }
        } else {
            // Insertion into User table failed, show error message and redirect
            echo '<script>alert("Registration failed. Please try again later.");</script>';
            echo '<script>window.setTimeout(function(){window.location.href = "register.php";}, 100);</script>';
        }
    }
}


mysqli_close($conn);
?>
