<?php
include('database_connect.php');
?>

<?php
if(isset($_POST['referral']) && $_POST['referral'] !="")
    $referral = $_POST['referral'];
?>

<?php
$title = $_POST['createTitle'];
$content = $_POST['createContent'];
$dateTime= date('d/m/y : H:i:s', time());
$ref = $_SERVER['HTTP_REFERER'];
?>

<?php
//echo date("d/m/y : H:i:s", time()); 
if($referral == "create_tab")
 {
   $query = "INSERT INTO `tabs` (`Name`,`Description`,`Creater`,`Creation Date`) VALUES ('".mysql_real_escape_string($title)."','".mysql_real_escape_string($content)."','Admin','".mysql_real_escape_string($dateTime)."');";
   mysql_query($query);
   header('Location: '.$ref);
 }
?>

<?php
if($referral == "create_experiment")
 {
   $query = "INSERT INTO `tabs` (`tab_name`,`tab_desc`,`creater`,`create_date`) VALUES ('".mysql_real_escape_string($title)."','".mysql_real_escape_string($content)."','Admin','".mysql_real_escape_string($dateTime)."');";
   mysql_query($query);
   header('Location: '.$ref);
 }
?>



