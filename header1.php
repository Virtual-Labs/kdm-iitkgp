<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script type="text/javascript" src="<?php echo $base_user_dir; ?>js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo $base_user_dir; ?>ajaxFunctions/ajaxfunctions.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/website.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/tabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/global.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/ddsmoothmenu.css" />




<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})


</script>

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

<div id="login_registration" style="">
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="<?php echo $base_user_dir; ?>">Home</a></li>
<li><a href="#">Experiments</a>
  <ul>
  <?php
  $obj = new dataFetchQuery();
  $rows = $obj->getCategoryList();
  for($i=0; $i<sizeof($rows); $i++)
  {
    echo "<li style='float:left;'><a href='".$base_user_dir."experiments/exp_list.php?cid=".$rows[$i]['id']."' style='text-align:left; padding-left:10px;'>".$rows[$i]['title']."</a></li>";
  }
  ?>
  </ul>
</li>
<li><a href="#">Instruction</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>


<?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != "") { ?>
<li><a href="#">Welcome&nbsp;&nbsp;<?php echo $_SESSION['f_name']; ?> </a></li>
<li><a href="<?php echo $base_user_dir; ?>logout.php">Logout</a></li>

<?php } 
 else { ?>
<li><a href="<?php echo $base_user_dir; ?>/login.php">Login</a></li>
<li><a href="<?php echo $base_user_dir; ?>/registration.php">Registration</a></li>

<?php } ?>

</ul>
<br style="clear: left" />
</div>
</div><!-- end of login_registration div-->

</body>
</html>