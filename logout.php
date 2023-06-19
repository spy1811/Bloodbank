<?php
session_start();
echo $_SESSION['email'];
session_unset('email');
session_destroy();
header('location:login.php');
?>