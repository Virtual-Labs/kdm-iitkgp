<?php 
session_start();
?>

<?php
include('../database/database_connect.php');
?>

<?php

if(isset($_GET['username']) && $_GET['username'] != "")
    $uername= $_GET['username'];
	
if(isset($_GET['password']) && $_GET['password'] != "")
    $password= $_GET['password'];

if(isset($_GET['type']) && $_GET['type'] != "")
    $type= $_GET['type'];
	
$query = "SELECT * FROM `user` WHERE `email`='".$uername."' and `password`='".$password."' and `user_type`='".$type."'";

$result = mysql_query($query);
if(mysql_num_rows($result) > 0){
	while($row = mysql_fetch_array($result))
		  {
			  $_SESSION['uid']      = $row['uid'];
			  $_SESSION['f_name']   = $row['f_name'];
			  $_SESSION['email']    = $row['email'];
			  $_SESSION['userType'] = $row['user_type'];
		  }
		
  echo "Success";
}
else
  echo "Invald Email or Password !";

	
?>

