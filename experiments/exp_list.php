<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experiment - VLS1</title>
<script type="text/javascript" src="http://vls1.iitkgp.ernet.in/vls_web/js/jquery.min.js"></script>
</head>

<body>
<?php if(isset($_GET['cid']) && $_GET['cid'] != "")  $cid = $_GET['cid']; ?>
<div class="wrapper" style="">

   <div class="wrapper-header">
     <?php include('../header1.php'); ?>
    </div> <!-- End of Wrapper class -->
	
	<div id="wrapper-category" style="background-color:#FFFFFF; margin:0 auto 0 auto; width:1024px; height:90px; margin-bottom:0px;">
	</div><!-- End iof #wrapper-category -->
	
	<div class="wrapper-content">
	 <div id="e" style="border:1px solid red; height:700px;margin-left:10px; margin-right:10px;">
	  <ul style="text-align:left; list-style:none; font-size:18px;">
	  <?php $obj = new dataFetchQuery(); ?>
	  <?php
	   $rows = $obj->fetchExpList($cid);
	   for($i=0; $i<sizeof($rows); $i++)
	   {
	  ?>
	     <?php
		 //if($i<10) $i='0'.$i;
		 ?>
	     <li style="margin-bottom:10px;">
		 <?php echo ($i+1); ?>.&nbsp;&nbsp;<a href="experiment.php?expId=<?php echo $rows[$i]['exp_id'];?>"><?php echo $rows[$i]['title']; ?></a>
		 </li>
	  <?php
	   } 
	  ?>
	  </ul>
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
