<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script type="text/javascript" src="<?php echo $base_user_dir; ?>ajaxFunctions/ajaxfunctions.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/website.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/tabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_user_dir; ?>styles/global.css" />


<title></title>
<script type="text/javascript">
function checkRefresh()
{
  //alert("nmnmnmmmn");
   
}
</script>

</head>
<body onload="javascript:checkRefresh();">

<?php
include('config.php');
include('database/dataInsertQuery.php');
include('database/dataFetchQuery.php');
?>

<div class="header">
 <div id="iitlogo"><img src="<?php echo $base_user_dir; ?>images/iit_logo.png" /></div>
</div><!-- End of header class -->

<div id="login_registration">
  <div id="home"><a href="<?php echo $base_user_dir; ?>" onclick="login_registration('index')">Home</a></div>
  
  <?php
  if(isset($_SESSION['uid']) && $_SESSION['uid'] != "")
  {
 
   include('user_track.php');

  ?>
  <div id="checkRef" style="display:none;"></div>
      <div style=" font-family:Arial, Helvetica, sans-serif; color:#ffffff; font-size:13px; float:left; margin-top:10px; text-align:left; margin-left:30px;border-right:1px solid #000000; width:140px;">Welcome&nbsp;&nbsp;<?php echo $_SESSION['f_name']; ?> </div> 
      <div id="logout" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FFFFFF; float:left; width:90px;  margin-top:10px;border-right:1px solid #000000;"><a href="<?php echo $base_user_dir; ?>logout.php">Logout</a></div>
      
  <?php     
  }
  else
  {
  ?>
	  <div id="loginn"><a href="<?php echo $base_user_dir; ?>login.php" onclick="login_registration('login')">Login</a></div>
	  <div style="width:10px;float:left;">&nbsp;</div>
	  <div id="regs"><a href="<?php echo $base_user_dir; ?>registration.php" >Registration</a></div>
          
  <?php
  }
  ?>
  <div id="regs"><a href="<?php echo $base_user_dir; ?>instructions/instruction.php" >Instruction</a></div>
</div><!-- end of login_registration div-->

</body>
</html>
