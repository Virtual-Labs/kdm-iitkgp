<script>
	$(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: 'img/loading.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true
		});
	});
</script>

<div class="leftPanel">

<!-- *************************************************************************************************************************** -->
<!-- <div id="leftUpper">
   <div id="upperHeader">Featured Simulation</div>
   <div id="upperContent">
     <div id="featuredTitle">
	    Featured Sinulation - 1
	 </div>
	 <div id="featuredImage">
	   <img src="<?php //echo $base_user_dir; ?>images/featuredImage.jpg" width="274" height="100" />
	 </div>
	 <div id="featuredText">
	   Maecenas leo tortor, lacinia eu gravida ultricies, blandit vitae lectus. Donec augue magna, mattis nec pellentesque vel, egestas ac orci. Praesent sagittis vulputate vehicula. Proin porttitor scelerisque nunc congue commodo. Cras viverra sollicitudin sagittis. Mauris pretium, quam sit amet condimentum tincidunt, purus nulla interdum tellus, sed tristique libero libero a mauris.Simulator
	 </div>
   </div>
 </div>--><!-- End of leftUpper div -->
<!-- *************************************************************************************************************************** -->


<!-- *************************************************************************************************************************** -->
<div id="leftUpper">
   <div id="upperHeader">Featured Simulation</div>
<div id="container">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
				<?php
				$i=1;
				$sql = "select * from `experiments` where `description`!='' and `status`='published' and `exp_id` ";
				$res = mysql_query($sql);
				while($row = mysql_fetch_array($res))
				{
				 if(file_exists("experiments/expfolder_".$row['exp_id']."/feat_demo_".$row['exp_id'].".JPG"))
				 {
				   $path = "experiments/expfolder_".$row['exp_id']."/feat_demo_".$row['exp_id'].".JPG";
				   ?>
				   <a href="<?php echo $base_user_dir;?>/experiments/experiment.php?expId=<?php echo $row['exp_id']?>" title="<?php echo $row['title'];?>" style="text-decoration:none; font-family:Georgia, 'Times New Roman', Times, serif; font-size:12px; color:#999999; text-align:justify;"><img src="<?php echo $path ?>" width="570" height="100" /><br /><?php echo $row['description'] ?></a>
				   <?php
				   $i++;
				  }
				}
				?>
				</div>
			</div>
		</div>
	</div>	
 </div>
<!-- *************************************************************************************************************************** -->






 
<!-- *************************************************************************************************************************** --> 
 <div id="leftLower">
   <div id="lowerHeader">Sponsors</div>
   <div id="lowerContent">
     <div id="sponsorImage"><img src="<?php echo $base_user_dir; ?>images/ashoka.jpg" width="60" height="85" /></div>
	 <div id="sponsorText">This project is an initiative of Ministry of Human Resource Department under National Mission on Education through ICT. These experiments and labs will be hosted for open access through the main project website http://vls1.iitkgp.ernet.in</div>
   </div><!-- End of lowerContent div -->
 </div><!-- End of leftLower div -->
<!-- *************************************************************************************************************************** -->


</div><!-- End of leftPanel class -->