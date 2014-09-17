<div id="commonRight" style="margin-top:4px;">
  <div id="commonHeader" style="clear:both;">
  <div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Add Tab(s)</div>
  </div>
  
  <div  id="xxx" style="overflow:auto; clear:both; height:130px;">
  <?php
   
   $tabContentStatus = "";
   $obj = new dataFetchQuery();
   if($expId != "")
     $tabContentStatus = $obj->getTabContentStatus($expId);
   $obj->addTabs($expId,$tabs,$tabContentStatus);
   
  ?>
  </div>
</div>


<div id="commonRight">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Add Category(s)</div></div>
  <div  id="rightExp">
  <?php $obj->addCategory($expId); ?>
  </div>
</div>

<div id="commonRight" style="clear:both;">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Your Experiment(s)</div></div>
  <div  id="rightExp">
  <?php $obj->showRightExperiments('yourExp'); ?>
  </div>
</div>