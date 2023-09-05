<?php

require_once 'dbconfig.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regNum = $_POST['email'];
    $password = $_POST['pwd'];

    $regNum = mysqli_real_escape_string($conn, $regNum);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT regNum, password FROM User WHERE regNum = '$regNum'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['regnum'] = $regNum;
            header("location: home.php");
            exit();
        }
    }

    echo '<script>alert("Incorrect registration number or password. Please try again.");</script>';
    echo '<script>window.setTimeout(function(){window.location.href = "signin.php";}, 100);</script>';

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
