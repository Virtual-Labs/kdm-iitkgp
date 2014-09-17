<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<textarea name="feedback"  cols="50" rows="30"></textarea>
<input type="submit" value="OK" />

</form>


<?php 
if(isset($_POST['feedback']))
   {
       $x = $_POST['feedback'];
	   $xx = serialize($x);
	   
      echo  $query = "UPDATE `feedbackFormContents` SET  `content` ='".$xx."'  ";
	   mysql_query($query);
   }
?>