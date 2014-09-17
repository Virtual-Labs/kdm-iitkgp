<?php session_start(); ?>
<?php include('../config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="<?php echo $base_user_dir; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
<script type="text/javascript" src="../ajaxFunctions/ajaxfunctions.js"></script>
<link rel="stylesheet" href="../styles/admin_styles.css" />
<title></title>
</head>

<body>
<?php
if(!isset($_SESSION['userType']) && $_SESSION['userType'] == ""  && $_SESSION['userType'] != "Admin")
    header('Location: http://vls1.iitkgp.ernet.in/vls_web/vls_admin/');

 include("../database/dataFetchQuery.php");  
 include("../database/dataInsertQuery.php"); 
?>

<div id="toppanel">
   <div id="admintext">Admin Panel</div> 
   <div id="userlogin">
   <?php echo "Welcome ".$_SESSION['f_name']."  ".$_SESSION['l_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../admin_logout.php">Log out</a>
   </div>
</div><!-- End of toppanel div -->
</body>
</html>

