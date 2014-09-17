<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<div class="adminpanel">
<div id="dashboardleftpanels">
<?php
include('../panels/leftpanel.php');
?>
</div>
<div id="dashboardtoppanels">
<?php
include('../panels/toppanel.php');
?>
</div>

<!--<div id="dashboardcontentpanels">-->
<div id="dashboardbodypanelsfull">
<div id="contentTitle"><div id="contentLogo" style=""><img src="../../images/users.png" /></div><div id="contentText">Show Users</div></div>
  <div id="titleInputBox" style="margin-bottom:50px;"></div>
  <div id="showAll" style=""></div>
   <?php
   //include('../database/queryFromPages.php');   
   //$vv = new queryFromPages();
   //$vv->showAllUsers();
   ?>
  <div id="showAll" style=""></div>
</div><!-- End of dashboardbodypanelsfull div -->
</div><!-- end of dashboardcontentpanels div -->
<div id="dashboardseperator">
<!--</div>-->

<div id="dashboardrightpanels">
</div>

</div><!--End of adminpanel class -->

</body>
</html>
