<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create new experiment - Admin Panel VLS1</title>
<style type="text/css">
<!--
.style2 {font-size: 36px}
-->
</style>
</head>

<body>
<span class="style2"></span>

<div class="adminpanel">
<div id="dashboardleftpanels" >
<?php
include('../panels/leftpanel.php');
?>
</div>
<div id="dashboardtoppanels">
<?php
include('../panels/toppanel.php');
$tabs = array();
$expId = "";
?>
</div>

<form action="../database/dataInsertQuery.php?referral=experiment&action=create" method="post" name="createExperiment" id="createExperiment">
<div id="dashboardbodypanels">
<div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText">Add New Experiment</div></div>
<div id="titleInputBox" style="margin-bottom:50px;"><input type="text" name="createTitle" id="createTitle" value="" /></div>
<div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100" ></textarea></div>
</div><!-- end of dashboardbodypanels div -->


<div id="dashboardseperator">
</div>


<div id="dashboardrightpanels">
<div><input type="image" src="../../images/publish-button.jpg" /></div> <!--onclick="javascript: createEditExperiments('create'); return false;"-->

<?php
include('right-experiments.php');
?>
<!--<div><input type="image" src="../../images/publish-button.jpg" onclick="javascript: createEditExperiments('create'); return false;" /></div>-->
</form>

</div><!-- End of dashboardbodypanels div -->



</div><!--End of adminpanel class -->

</body>
</html>
