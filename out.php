<?php
// session_start();
// $_SESSION['fullname'] = '';

session_start();
unset($_SESSION['id']);
header("Location: studentlogin.php");

?>