<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel(Edit tab)</title>
</head>
<body>
<div class="adminpanel">

  <div id="dashboardleftpanels"><?php include('../panels/leftpanel.php'); ?></div>
  <div id="dashboardtoppanels"><?php include('../panels/toppanel.php'); ?></div>
  
  <?php
  $tabId = "";
  $updateTitle = "";
  if((isset($_GET['tabid'])) || (isset($_GET['updateTitle'])))
  {
    if(isset($_GET['tabid']))
	  $tabId = $_GET['tabid'];
	  
    if(isset($_GET['updateTitle']))
	  $updateTitle = $_GET['updateTitle'];
  
    include_once('../database/dataFetchQuery.php');
	$obj = new dataFetchQuery();
	$result = $obj->editTab($tabId,$updateTitle);
	$updateTitle = $result['title'];
	$updateContent = $result['description'];
	$imagePath = $result['image'];
	$tab_id =  $result['tab_id']; 
  }
  ?>
  <div id="dashboardbodypanels">
  <form action="../database/dataInsertQuery.php?referral=tab&action=edit" method="post" enctype="multipart/form-data">
    <div id="contentTitle">
      <div id="contentLogo"><img src="../../images/tab.jpg" /></div>
      <div id="contentText">Edit Tab</div>
    </div>
    <div id="titleInputBox" style="margin-bottom:10px;"><input type="text" name="createTitle" id="createTitle" value="<?php echo $updateTitle; ?>" /></div>
	
	
	<div style="clear:both; width:100%; margin-bottom:10px;">
	<div id="tabLogo" style="float:left;">Upload Tab Icon :: <input type="file" name="uploadTabPic" id="uploadTabPic"  size="50"/></div>
	<div><img src="../<?php echo $imagePath; ?>" width="30" height="30" /> </div>
	<div style="clear:both;"></div>
	</div>
	
	
    <div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100"><?php echo $updateContent; ?></textarea></div>
	<input type="hidden" name="prvTitle" id="prvTitle" value="<?php echo $updateTitle; ?>" />
	<input type="hidden" name="mt" id="mt" value="<?php echo $tab_id; ?>" />
	<input type="hidden" name="imagePath" id="imagePath" value="<?php echo $imagePath; ?>" />

  </div><!-- end of dashboardcontentpanels div -->
  
  <div id="dashboardseperator"></div>
	
  <div id="dashboardrightpanels">
    <div><input type="image" src="../../images/publish-button.jpg" onclick="javascript: checkExt(); "  /></div> <!-- onclick="javascript: createEditTab('edit','<?php //echo $tab_id; ?>'); return false;" -->
    </form>   
	<?php include('create-tab-right.php'); ?>
  </div><!-- End of dashboardrightpanels div -->
	
</div><!--End of adminpanel class -->
</body>
</html>
