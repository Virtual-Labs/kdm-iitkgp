<?php
$username = "root user";
$password = "root password";
$hostname = "your host name";
$database = "your database name"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  //echo "Connected to MySQL<br>";
?>

<?php
//select a database to work with
$selected = mysql_select_db($database,$dbhandle)
  or die("Could not select examples");
?>
