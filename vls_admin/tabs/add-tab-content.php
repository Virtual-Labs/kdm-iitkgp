<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel(Add tab content)</title>
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


<div id="dashboardbodypanels">
<form action="../database/dataInsertQuery.php?referral=addTabContent" method="post" enctype="multipart/form-data">
<?php
$obj = new dataFetchQuery();
?>
<div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText">Add Tab Content</div></div>
<div id="titleInputBox" style="margin-bottom:10px;padding-top:10px; font-family:Georgia, 'Times New Roman', Times, serif;color:#999999;">
   <div id="experimentList" style="float:left;text-align:center;">
   Select Experiment ::&nbsp;
	 <?php
	 $obj->showExperiments();
	 ?>
   </div>
   <div id="tabList" style="text-align:center; float:left; margin-left:15px;">
   Select Tab ::&nbsp;
   <select name="selectExperimentList" disabled="disabled" style="color:#999999; width:100px;">
      <option value="select">---Select---</option>
   </select>
   </div>
   <div id="" style="float:right; margin-top:-2px;">Upload file ::&nbsp;&nbsp;<input type="file" name="uploadFile" id="uploadFile"  /></div>
   <div style="clear:both;"></div>
</div><!-- End of titleInputBox div -->
<div id="folderPath" style="width:100%; height:25px; margin-bottom:10px; text-align:left; font-family:Georgia, 'Times New Roman', Times, serif;color:#999999;"></div>

<div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100%" ></textarea></div>
</div><!-- end of dashboardbodypanels div -->


<div id="dashboardseperator">
</div>


<div id="dashboardrightpanels">
<div><input type="image" src="../../images/publish-button.jpg" /></div>    <!--  onclick="javascript: addTabContent(); return false;" -->
</form>
<?php
include('create-tab-right.php');
?>
</div><!-- End of dashboardrightpanels div -->


</div><!--End of adminpanel class -->

</body>
</html>

