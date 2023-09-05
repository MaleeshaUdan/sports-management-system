<?php
session_start();
session_unset();
session_destroy();
echo '<script>alert("Logout successfully!");</script>';
echo '<script>window.setTimeout(function(){window.location.href = "signin.php";}, 100);</script>';
?>
