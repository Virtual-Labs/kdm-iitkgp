<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel (See all users)</title>


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
<div id="contentTitle">
  <div id="contentLogo" style=""><img src="../../images/users.png" /></div>
  <div id="contentText">User Log</div>
  <div style="clear:both;"></div>
</div> <!-- End of contentTitle div -->
<form action="#" method="post" name="showUserList" id="showUserList">
  <div id="showCheckBox">
  <div style="float:left;">
  Filter ::&nbsp;&nbsp;
  <select name="userStatusUp" id="userStatusUp" disable=true>
    <option value="">-- Select --</option>
	<option value="Active">Student</option>
    <option value="Block">Aca</option>
	<option value="Delete">Delete</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onclick="javascript: changeUserStatus('userStatusUp'); return false;" src="../../images/apply.jpg"  /></div>
  <div style="clear:both;"></div>
  </div>
  <div id="showCheckBox" style="margin-left:100px;">
  <div style="float:left;">
  Change User Type ::&nbsp;&nbsp;
  <select name="userTypeUp" id="userTypeUp" style="font-family:Georgia, 'Times New Roman', Times, serif; color:#999999; font-size:13px;">
    <option value="">-- Select --</option>
    <option value="Admin">Administrator</option>
	<option value="Normal">Normal</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onClick="javascript: changeUserType('userTypeUp'); return false;" src="../../images/apply.jpg" /></div>
  <div style="clear:both;"></div>
  </div>
  
  <div id="showAllHeaders" >
    <ul style=" padding-top:8px;">
	 <li id="titleBar" style="width:20%;">Name</li>
	 <li id="titleBar" style="width:30%;">Email</li>
	 <li id="titleBar" style="width:10%;">Activity</li>
	 <li id="titleBar" style="width:18%; float:right;text-align:center;">Date</li>
	 <div style="clear:both;"></div>
	</ul>
  </div>
   <?php  
   $obj = new dataFetchQuery();
   $obj->displayUserLog();
   ?>
   
  <div id="showAllHeaders" style="margin-top:-15px;" >
    <ul style=" padding-top:8px;">
	 <li id="titleBar" style="width:20%;">Name</li>
	 <li id="titleBar" style="width:30%;">Email</li>
	 <li id="titleBar" style="width:10%;">Activity</li>
	 <li id="titleBar" style="width:18%;">Date</li>
	 <div style="clear:both;"></div>
	</ul>
  </div>
  
  <div id="showCheckBox" style="">
  <div style="float:left;">
  Action ::&nbsp;&nbsp;
  <select name="userStatusDown" id="userStatusDown" style="">
    <option value="">-- Select --</option>
    <option value="Active">Active</option>
	<option value="Block">Block</option>
	<option value="Delete">Delete</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onclick="javascript: changeUserStatus('userStatusDown'); return false;"  src="../../images/apply.jpg"/></div>
  <div style="clear:both;"></div>
  </div>
  <div id="showCheckBox" style="margin-left:100px;">
  <div style="float:left;">
  Change User Type ::&nbsp;&nbsp;
  <select name="userTypeDown" id="userTypeDown" style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#999999; font-size:13px;">
    <option value="">-- Select --</option>
    <option value="Admin">Administrator</option>
	<option value="Normal">Normal</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onClick="changeUserType('userTypeDown'); return false;" src="../../images/apply.jpg" /></div>
  <div style="clear:both;"></div>
  </div>
  </form>
</div><!-- End of dashboardbodypanelsfull div -->
<!--</div> end of dashboardcontentpanels div -->
<div id="dashboardseperator">
<!--</div>-->

<div id="dashboardrightpanels">
</div>

</div><!--End of adminpanel class -->

</body>
</html>
