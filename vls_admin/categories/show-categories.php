<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel (See all categories)</title>


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
  <div id="contentLogo" style=""><img src="../../images/tab.jpg" /></div>
  <div id="contentText">Show Categories</div>
  <div style="clear:both;"></div>
</div> <!-- End of contentTitle div -->
<form action="#" method="post" name="showCategoryList" id="showCategoryList">
  <div id="showCheckBox">
  <div style="float:left;">
  Action ::&nbsp;&nbsp;
  <select name="categoryStatusUp" id="categoryStatusUp">
    <option value="">-- Select --</option>
	<option value="published">Publish</option>
    <option value="draft">Draft</option>
	<option value="delete">Delete</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onclick="javascript: changeCategoryStatus('categoryStatusUp'); return false;" src="../../images/apply.jpg"  /></div>
  <div style="clear:both;"></div>
  </div>
  <div id="showCheckBox" style="margin-left:100px;">
  <div style="float:left;">
  <!--Change User Type ::&nbsp;&nbsp;
  <select name="userTypeUp" id="userTypeUp" style="font-family:Georgia, 'Times New Roman', Times, serif; color:#999999; font-size:13px;">
    <option value="">-- Select --</option>
    <option value="Admin">Administrator</option>
	<option value="Normal">Normal</option>
  </select>-->
  </div>
  <div id="applyButtons"><!--<input type="image" src="../../images/apply.jpg" /> --></div>   <!-- onClick="javascript: changeUserType('userTypeUp'); return false;" -->
  <div style="clear:both;"></div>
  </div>
  
  <div id="showAllHeaders" >
    <ul style=" padding-top:8px;">
	 <li id="titleBar" style="width:18%;">Title</li>
	 <li id="titleBar" style="width:19%;">Creator</li>
	 <li id="titleBar" style="width:28%;">Description</li>
	 <li id="titleBar" style="width:8%;">Status</li>
	 <li id="titleBar" style="width:11%;">Last Modified</li>
	 <li id="titleBar" style="width:11%;text-align:center; margin-top:-3px;">Modifier </li>
	 <div style="clear:both;"></div>
	</ul>
  </div>
   <?php
   //include('../database/dataFetchQuery.php');   
   $obj = new dataFetchQuery();
   $obj->showAllCategories();
   ?>
   
  <div id="showAllHeaders" style="margin-top:-15px;" >
    <ul style=" padding-top:8px;">
	 <li id="titleBar" style="width:18%;">Title</li>
	 <li id="titleBar" style="width:19%;">Creator</li>
	 <li id="titleBar" style="width:28%;">Description</li>
	 <li id="titleBar" style="width:8%;">Status</li>
	 <li id="titleBar" style="width:11%;">Last Modified</li>
	 <li id="titleBar" style="width:11%;text-align:center; margin-top:-3px;">Modifier</li>
	 <div style="clear:both;"></div>
	</ul>
  </div>
  
  <div id="showCheckBox" style="">
  <div style="float:left;">
  Action ::&nbsp;&nbsp;
  <select name="categoryStatusDown" id="categoryStatusDown" style="">
    <option value="">-- Select --</option>
    <option value="published">Publish</option>
	<option value="draft">Draft</option>
	<option value="delete">Delete</option>
  </select>
  </div>
  <div id="applyButtons"><input type="image" onclick="javascript: changeCategoryStatus('categoryStatusDown'); return false;"  src="../../images/apply.jpg"/></div>
  <div style="clear:both;"></div>
  </div>
  <div id="showCheckBox" style="margin-left:100px;">
  <div style="float:left;">
  <!--Change User Type ::&nbsp;&nbsp;
  <select name="userTypeDown" id="userTypeDown" style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#999999; font-size:13px;">
    <option value="">-- Select --</option>
    <option value="Admin">Administrator</option>
	<option value="Normal">Normal</option>
  </select>-->
  </div>
  <div id="applyButtons"><!--<input type="image" src="../../images/apply.jpg" /> --></div>  <!-- onClick="changeUserType('userTypeDown'); return false;" -->
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

