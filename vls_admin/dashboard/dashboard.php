<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard - Admin Panel VLS1</title>
</head>

<body>

<div class="adminpanel">
<div id="dashboardleftpanels">
<?php
include("../panels/leftpanel.php");
?>
</div>
<div id="dashboardtoppanels">
<?php
include("../panels/toppanel.php");
?>
</div>
<div id="dashboardbodypanels" style="width:84%;">

<div id="clear"><div id="contentTitle"><div id="contentLogo"><img src="../../images/tab.jpg" /></div><div id="contentText">Dashboard</div></div></div>

<div id="clear"></div>
	<div id="dashboardRight">
	  <div style="border:1px solid #DFDFDF; clear:both;">
	   <div style="background-image:url(../../images/titleBG.jpg); height:36px;text-align:left;clear:both; "> &nbsp;&nbsp;Right Now</div>
	   <div id="" style="width:100%; height:200px; background-color:#F6F6F6; clear:both;'">
	   <table width="100%">
	   <th>Content</th>
	   <th>Discussion</th>
	   <tr><td><div style="border-bottom:1px solid #ececec;"></div></td><td><div style="border-bottom:1px solid #ececec;"></div></td></tr>
	   <tr>
	   <?php
	   $obj = new dataFetchQuery();
	   ?>
	   <td>Experiments</td><td><?php  $obj->getTotalNoOfContents('experiments'); ?></td>
	   </tr>
	   <tr>
	   <td>Comments</td><td><?php  $obj->getTotalNoOfContents('coments'); ?></td>
	   </tr>
	   <tr>
	   <td>Tabs</td><td><?php  $obj->getTotalNoOfContents('tabs'); ?></td>
	   </tr>
	   </table>
	   </div>
	  </div>
	  
	  
	  <div style="border:1px solid #DFDFDF;clear:both; margin-top:25px;">
	   <div style="background-image:url(../../images/titleBG.jpg); height:36px;text-align:left;clear:both; "> &nbsp;&nbsp;Recent Comment</div>
	   <div id="" style="width:100%; height:100px; background-color:#F6F6F6; clear:both;'">
	   </div>
     </div>
	   
	</div><!-- End of dashboardRight div -->
	
	<div id="dashboardLeft">
	  <div style="border:1px solid #DFDFDF; clear:both;">
	   <div style="background-image:url(../../images/titleBG.jpg); height:36px;text-align:left;clear:both; "> &nbsp;&nbsp;Recent Drafts</div>
	   <div id="" style="width:100%;  background-color:#F6F6F6; clear:both;'">
	   <table>
	   <tr>
	   <td>Experiments</td><td>&nbsp;</td>
	   </tr>
	   <tr>
	   <td><div style="border-bottom:1px solid #999999;"></div></td><td><div style="border-bottom:1px solid #999999;"></div></td>
	   </tr>
	   <?php  $obj->getRecentDrafts('experiments'); ?>
	   <tr>
	   <td>Tabs</td><td>&nbsp;</td>
	   </tr>
	   <tr>
	   <td><div style="border-bottom:1px solid #999999;"></div></td><td><div style="border-bottom:1px solid #999999;"></div></td>
	   </tr>
	   <?php  $obj->getRecentDrafts('tabs'); ?>
	   </table>
	   </div>
	  </div>
	  
	  
	  
	</div><!-- End of dashboardLeft div -->
</div>



</div><!-- end of dashboardpanels div -->
</div><!--End of adminpanel class -->

</body>
</html>
