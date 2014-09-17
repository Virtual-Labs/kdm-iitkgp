<?php
$username = "your user name";
$password = "your password";
//$username = "root";
//$password = "";
$hostname = "your host address";
$database = "your database name";
 
//
//connection to the database
$con = mysqli_connect($hostname,$username,$password, $database) or die("Unabllle to connect to MySQL, please try after some time");
 //= mysqli_select_db($database,$dbhandle)
  //or die("Could not select examples");
//define("CON", $con);
mysqli_close();
?>
