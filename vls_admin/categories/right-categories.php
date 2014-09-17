<?php  $obj = new dataFetchQuery();  ?>

<div id="commonRight">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Category(s)</div></div>
  <div  id="rightExp">
  <?php $obj->showCategories(); ?>
  </div>
</div>


<div id="commonRight">
  <div id="commonHeader"><div style="padding-top:5px;"></div></div>
  <div  id="rightExp">
  <?php //$obj->showCategories(); ?>
  </div>
</div>

<div id="commonRight" style="clear:both;">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Your Experiment(s)</div></div>
  <div  id="rightExp">
  <?php $obj->showRightExperiments('yourExp'); ?>
  </div>
</div>