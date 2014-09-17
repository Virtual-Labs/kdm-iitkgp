<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1--Admin Panel(Create Tab)</title>
</head>
<body>
<div class="adminpanel">

  <div id="dashboardleftpanels"><?php include("../panels/leftpanel.php"); ?></div>
  <div id="dashboardtoppanels"><?php include("../panels/toppanel.php"); ?></div>
  
  <div id="dashboardbodypanels">
  <form action="../database/dataInsertQuery.php?referral=tab&action=create" method="post" enctype="multipart/form-data">
    <div id="contentTitle">
      <div id="contentLogo"><img src="../../images/tab.jpg" /></div>
      <div id="contentText">Add New Tab</div>
    </div>
    <div id="titleInputBox" style="margin-bottom:10px;"><input type="text" name="createTitle" id="createTitle" value="" /></div>
	<div id="tabLogo">Upload Tab Icon :: <input type="file" name="uploadTabPic" id="uploadTabPic"  size="50"/> </div>
    <div id="contentInputBox"><textarea class="ckeditor" name="editorContent" id="editorContent" rows="100" cols="100" ></textarea></div>
  </div><!-- end of dashboardbodypanels div -->
	
  <div id="dashboardseperator"> </div>
	
  <div id="dashboardrightpanels">
    <div style=""><input type="image" src="../../images/publish-button.jpg" onclick="javascript: checkExt(); " /></div> <!--   onclick="javascript: createEditTab('create'); return false;" -->
    </form>
    <?php include('create-tab-right.php'); ?>
  </div><!-- End of dashboardrightpanels div -->
  
</div><!--End of adminpanel class -->
</body>
</html>
