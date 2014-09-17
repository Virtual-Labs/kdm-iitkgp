<?php session_start(); ?>
<div id='' style=' width:100%;  text-align:left;'>
	<div style='clear:both; margin-top:10px;'>Welcome to the IIT KHARAGPUR <div>
	<div style='clear:both; margin-left:20px; margin-top:8px;'>Virtual Lab online feedback system. Thanks for taking the time to share your feedback. We'll use the information you provide below to improve our virtual labs.
	<div>".."
	
	
	
	
	<?php echo dirname(__FILE__);?> 
	
	


<?php echo "here is echoed text in PHP"; ?><br />

Here's more text in <b>HTML</b> <?php
$_SERVER['HTTP_HOST']; ?>
	
	
	
</div>



<?php session_start(); ?>
<?php
if($_SESSION['uid'] != "")
     echo $_SESSION['uid']; 
else
    echo "nnnnnnnnnnnn";
	
?>



<?php echo $_SESSION['f_name']; ?>

<input type='text' value="<?php echo $_SESSION['f_name']; ?>"   />


<?php echo $_SERVER['HTTP_HOST']; ?>