<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experiments - Admin Panel VLS1</title>
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


<div id="dashboardcontentpanels"><!-- style="width:100%; border:1px solid green; background-color:#FFFFCC;"-->


<div id="dashboardbodypanels" style="width:85%;">
  <div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText">Experiments</div></div>
  <div id="titleInputBox" style="margin-bottom:50px;"></div>
  <div id="showAll-exp">
    <ul>
	 <li id="titleBar" style="margin-left:30px; width:17%;">Title</li>
	 <li id="titleBar" style="width:15%;">Creator</li>
	 <li id="titleBar" style="width:30%;">Description</li>
	 <li id="titleBar">Status</li>
	 <li id="titleBar" style="width:10%;">Date</li>
	</ul>
  </div>
   <?php
   //include('../database/dataFetchQuery.php');   
   $obj = new dataFetchQuery();
   $obj->showAllExperiments();
   ?>
  <div id="showAll-exp">
    <ul>
	 <li id="titleBar" style="margin-left:30px; width:17%;">Title</li>
	 <li id="titleBar" style="width:15%;">Creator</li>
	 <li id="titleBar" style="width:30%;">Description</li>
	 <li id="titleBar">Status</li>
	 <li id="titleBar" style="width:10%;">Date</li>
	</ul>
  </div>
</div><!-- End of dashboardbodypanels div -->



<div style="clear:both;"></div>
</div><!-- end of dashboardcontentpanels div -->


<!--<div id="dashboardseperator">
</div>-->

<!--<div id="dashboardrightpanels">
</div><!-- End of dashboardrightpanels div -->


</div><!--End of adminpanel class -->

</body>
</html>

