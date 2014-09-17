<?php
@session_start();

include('database/dataInsertQuery.php');
$obj = new dataInsertQuery();
$obj->user_track("Logout at", "");

unset($_SESSION['uid']);
unset($_SESSION['f_name']);
unset($_SESSION['l_name']);
unset($_SESSION['email']);
unset($_SESSION['user_type']);


$_SESSION['uid'] = "";
$_SESSION['f_name'] = "";
$_SESSION['l_name'] = "";
$_SESSION['email'] = "";
$_SESSION['user_type'] = "";
session_destroy();
header('Location: http://vls1.iitkgp.ernet.in/vls_web/');
?>
