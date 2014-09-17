<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Expriment - VLS1</title>
</head>

<body>
<?php if(isset($_GET['expId']) && $_GET['expId'] != "")  $expId = $_GET['expId']; ?>
<div class="wrapper" style="">

   <div class="wrapper-header">
     <?php include('../header.php'); ?>
    </div> <!-- End of Wrapper class -->
	
	<div class="wrapper-content">
	 
	  <?php $obj = new dataFetchQuery(); ?>
	    <?php $tabTitle = $obj->fetchExperimentData($expId); ?>
	 <div id="experimentCanvas">
	 
	 </div>
	<div style="clear:both;"></div>
	</div><!-- end of wrapper-content class -->
	
    <div class="wrapper-footer">
	 <?php
	 include('../footer.php');
	 ?>
	</div><!-- End of wrapper-footer div -->

	
</div>




</body>
</html>
