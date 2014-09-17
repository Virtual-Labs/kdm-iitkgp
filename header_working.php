<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script type="text/javascript" src="<?php echo $base_user_dir; ?>js/dropdowntabs.js"></script>
<script type="text/javascript" src="<?php echo $base_user_dir; ?>ajaxFunctions/ajaxfunctions.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/website.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/bluetabs.css" />

<title></title>
</head>
<body>
<?php
include('config.php');
include('database/dataInsertQuery.php');
include('database/dataFetchQuery.php');
?>

<div class="header">
 <div id="iitlogo"><img src="<?php echo $base_user_dir; ?>images/iit_logo.png" /></div>
</div><!-- End of header class -->

<div id="login_registration">
<div id="bluemenu" class="bluetabs" style="border:1px solid red;">
<ul>
<li><a href="<?php echo $base_user_dir; ?>" onclick="login_registration('index')">Home</a></li>
<li><a href="#" rel="dropmenu2_b">Experiments</a></li>
<li><a href="<?php //echo $base_user_dir; ?>login.php" onclick="login_registration('login')">Login</a></li>
<li><a href="<?php echo $base_user_dir; ?>registration.php" >Registration</a></li>
</ul>
</div>


<!--1st drop down menu -->                                                   
<div id="dropmenu1_b" class="dropmenudiv_b">
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C1/">Three Point Path Synthesis with a RRRR Mechanism&nbsp;&nbsp;</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C2/">Position Analysis of a 4 Bar RRRR Grashofian Double Crank&nbsp;&nbsp;</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C4/">Image CSS</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C6/">Form CSS</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C5/">DIVs and containers</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C7/">Links and Buttons</a>
<a href="http://www.dynamicdrive.com/style/csslibrary/category/C8/">Other</a>
</div>
</div><!-- end of login_registration div-->

<script type="text/javascript">
//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
tabdropdown.init("bluemenu")
</script>


</body>
</html>