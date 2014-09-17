<div id="commonRight" style="margin-top:4px;">
  <div id="commonHeader" style="clear:both;">
  <div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Uploaded file(s)</div>
  </div>
  
  <div  id="ooo" style="overflow:auto; clear:both; height:130px;">
  <?php
   
  /* $tabContentStatus = "";
   $obj = new dataFetchQuery();
   if($expId != "")
     $tabContentStatus = $obj->getTabContentStatus($expId);
   $obj->addTabs($expId,$tabs,$tabContentStatus);*/
   $tabContentStatus = "";
   $obj = new dataFetchQuery();
  ?>
  </div>
</div>


<div id="commonRight">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Your Experiment(s)</div></div>
  <div  id="rightExp">
  <?php $obj->showRightExperiments('yourExp'); ?>
  </div>
</div>

<div id="commonRight" style="clear:both;">
  <div id="commonHeader"><div style="padding-top:5px;">&nbsp;&nbsp;&nbsp;Others's Experiment(s)</div></div>
  <div  id="rightExp">
  <?php $obj->showRightExperiments('otherExp'); ?>
  </div>
</div>