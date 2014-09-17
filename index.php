<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mechanical Engineering Department(IIT KGP)</title>

<meta name='robots' content='noindex,nofollow' />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#scrollbar1').tinyscrollbar();	
	});
</script>	
</head>

<body>
<div class="wrapper" style="">

   <div class="wrapper-header">
     <?php include("header.php"); ?>
    </div> <!-- End of Wrapper class -->
	
	<div class="wrapper-content">
	 <div id="left" style="width:28%; float:left;">
	 <?php
	 include('panels/left-panel.php');
	 ?>
	 </div>
	 
	 <div id="right" style="width:70%; float:right; margin-right:10px;">
	 <?php
	 include('panels/right-panel.php');
	 ?>
	 </div>
	 
	<div style="clear:both;"></div>
	</div><!-- end of wrapper-content class -->
	
    <div class="wrapper-footer">
	 <?php
	 include('footer.php');
	 ?>
	</div><!-- End of wrapper-footer div -->

	
</div>

</body>
</html>