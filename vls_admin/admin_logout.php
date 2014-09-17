<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['f_name']);
unset($_SESSION['l_name']);
unset($_SESSION['email']);
unset($_SESSION['userType']);


$_SESSION['uid'] = "";
$_SESSION['f_name'] = "";
$_SESSION['l_name'] = "";
$_SESSION['email'] = "";
$_SESSION['userType'] = "";
session_destroy();
header('Location: index.php');
?>