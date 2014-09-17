<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel (Edit Experiment)</title>
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

<?php
$experimentId = "";
$updateTitle = "";
if(isset($_GET['expId']) && $_GET['expId'] != "")
{
	$expId  =    $_GET['expId'];
	//$tabIds =    $_GET['tabIds'];
	//$totalCBox = $_GET['totalCheckBox'];
	$obj = new dataFetchQuery();
	$result = $obj->editExperiment($expId);
	$updateTitle = $result['title'];
	$updateContent = $result['description'];
	$tabIds = $obj->getTabIds($expId);
	$tabs = explode(",",$tabIds);
}
?>


<form action="../database/dataInsertQuery.php?referral=experiment&action=edit" method="post" name="createExperiment" id="createExperiment">
<div id="dashboardbodypanels">
<div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText">Edit Experiment</div></div>
<div id="titleInputBox" style="margin-bottom:50px;"><input type="text" name="createTitle" id="createTitle" value="<?php echo $updateTitle; ?>" /></div>
<div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100" ><?php echo $updateContent; ?></textarea></div>
</div><!-- end of dashboardbodypanels div -->
<input type="hidden" name="expId" id="expId" value="<?php echo $expId; ?>" />
<input type="hidden" name="prvTab" id="prvTab" value="<?php echo $tabIds; ?>" />
<div id="dashboardseperator">
</div>


<div id="dashboardrightpanels">
<div><input type="image" src="../../images/publish-button.jpg" /></div> <!--  onclick="javascript: createEditExperiments('edit','<?php //echo $exp_id; ?>'); return false;" -->
<?php
include('right-experiments.php');
?>
</form>

</div><!-- End of dashboardbodypanels div -->



</div><!--End of adminpanel class -->

</body>
</html>
<script type="text/javascript">
</script>
