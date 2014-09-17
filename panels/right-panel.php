<div class="rightPanel">
  <div id="rightUpper">
    <div id="rightUpperBanner"><img src="<?php echo $base_user_dir; ?>/images/banner.jpg" width="717" height="200" /></div>
  </div>
  <!-- End of rightUpper div -->
  <div id="rightLower">
    <div id="rightLeft">
      <div id="headerBG">VLS-I Experiments at IIT KHARAGPUR</div>
      <div id="scrollbar1">
        <div class="scrollbar">
          <div class="track">
            <div class="thumb">
              <div class="end"></div>
            </div>
          </div>
        </div>
        <div class="viewport">
          <div class="overview">
            <?php
			 $obj = new dataFetchQuery();
			 $obj->showExperimentTitles();
	        ?>
          </div>
        </div>
      </div>
      <div style="clear:both;"></div>
    </div>
    <!-- End of rightLeft Div -->
    <div id="rightRight">
      <div id="headerBG">The Philosophy</div>
      <div id="rightRightImage"></div>
      <div id="rightRightText">A virtual laboratory is a tool for distance learning and/or experimentation that allows people to share knowledge, data, voice, video, tools, and many other resources. It provides a suitable environment to extend, improve, integrate, refine, and assist the learning and/or experimentation process of many subjects, thus contributing to an increase of the effectiveness of scientific research and widening the use of scarce or costly equipments. </div>
    </div>
  </div>
  <!-- End of rightLower div -->
  <!--<div style="clear:both;"></div>-->
</div>
<!-- End of rightPanel class -->
