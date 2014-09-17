<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create new category - Admin Panel VLS1</title>
</head>

<body>

<div class="adminpanel">
<div id="dashboardleftpanels" >
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
$id = "";
$action = "create";
if(isset($_GET['id']) && $_GET['id'] != "")
{
   $id = $_GET['id'];
   $obj = new dataFetchQuery();
   $row = $obj->getCategoryDetails($id);
   $action = "edit";
}
if($action == "create")  $header = "Add New Category";
else $header = "Edit Category";
?>
<span class="style1"></span>

<form action="../database/dataInsertQuery.php?referral=category&id="<?php echo $id; ?> method="post" name="createcategory" id="createCategory">
<div id="dashboardbodypanels">
<div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText"><?php echo $header; ?></div></div>
<div id="titleInputBox" style="margin-bottom:50px;"><input type="text" name="createTitle" id="createTitle" value="<?php echo @$row['title']; ?>" /></div>
<div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100" ><?php echo @$row['description']; ?></textarea></div>
<input type="hidden" name="catid" id="catid" value="<?php echo @$row['id']; ?>" />
<input type="hidden" name="act" id="act" value="<?php echo $action; ?>" />
</div><!-- end of dashboardbodypanels div -->


<div id="dashboardseperator">
</div>


<div id="dashboardrightpanels">
<div><input type="image" src="../../images/publish-button.jpg" /></div> <!--onclick="javascript: createEditExperiments('create'); return false;"-->

<?php
include('right-categories.php');
?>
<!--<div><input type="image" src="../../images/publish-button.jpg" onclick="javascript: createEditExperiments('create'); return false;" /></div>-->


</div><!-- End of dashboardbodypanels div -->
</form>


</div><!--End of adminpanel class -->

</body>
</html>
