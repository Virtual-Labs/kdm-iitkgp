<?php @session_start(); ?>
<?php include('database_connect.php'); ?>
<?php include_once('../config.php'); ?>


<?php
if(isset($_GET['referral']) && $_GET['referral'] !="")
{
  $obj = new dataFetchQuery();
  //echo $_GET['referral'];
  //exit();
  $obj->$_GET['referral']();
}
?>
<?php
class dataFetchQuery   
 {

  /* public function __construct(){
      include('../config.php');
     //echo $base_admin_dir; 
   }*/
 
   public function showAllTabs()
    {
	  $query = "SELECT * FROM `tabs` ORDER BY `title`";
	  $runQuery = mysql_query($query);
	  $totalTab = mysql_num_rows($runQuery);
	  if (!is_resource($runQuery)) {
       echo mysql_error();
	   }
	  $i = 0;
	  while($row = mysql_fetch_array($runQuery))
	   { 
	     $tab_id = $row['tab_id'];
		 if(strlen(strip_tags($row['description'])) > 55)
		    $description = substr((strip_tags($row['description'])),0,55)."....";
		 else
		    $description = strip_tags($row['description']);
		 echo "<div style='clear:both; height:50px; background-image:url(../../images/dataBGShadow.jpg);font-family:Georgia; font-size:13px; color:#21759B;'>";
		 echo "<div id='' style='width:20%; text-align:left; margin-left:10px; float:left;margin-top:7px; overflow:hidden;'><input type='checkbox' name='showTabCheckBox' value='".$row['tab_id']."' style='margin-top:10px;' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='../tabs/edit-tab.php?tabid=".$tab_id."' style='text-decoration:none; color:#21759B;'>".$row['title']."</a></div>";
		 echo "<div id='' style='float:left;width:18%; text-align:left;margin-top:18px; overflow:hidden;'>".$row['creator']."</div>";
		 echo "<div id='' style='float:left;width:27%; text-align:left;margin-top:18px; overflow:hidden;'>".$description."</div>";
		 echo "<div id='' style='float:left;width:8%;  text-align:left;margin-top:18px;'>".$row['status']."</div>";
		 echo "<div id='' style='float:left;width:11%; text-align:left;margin-top:18px;'>".$row['creation_date']."</div>";
		 echo "<div id='' style='float:left;width:11%; text-align:left;margin-top:18px;text-align:center;'><input type='text' name='".$row['title']."' id='".$row['title']."' value='".$row['index']."' size='1'  /></div>";
		 echo "<div style='clear:both;'></div>";
		 echo "</div>";
         $i++;
	   }
	  echo "<input type='hidden' name='totalTab' id='totalTab' value='".$totalTab."' />";
	}
	
	
	
public function showAllCategories()
{
	  $query = "SELECT * FROM `categories` ORDER BY `title`";
	  $runQuery = mysql_query($query);
	  $totalTab = mysql_num_rows($runQuery);
	  $i = 0;
	  while($row = mysql_fetch_array($runQuery))
	   { 
	     $cat_id = $row['id'];
		 if(strlen(strip_tags($row['description'])) > 55)
		    $description = substr((strip_tags($row['description'])),0,55)."....";
		 else
		    $description = strip_tags($row['description']);
			
		 echo "<div style='clear:both; height:50px; background-image:url(../../images/dataBGShadow.jpg);font-family:Georgia; font-size:13px; color:#21759B;'>";
		 echo "<div id='' style='width:20%; text-align:left; margin-left:10px; float:left;margin-top:7px; overflow:hidden;'><input type='checkbox' name='showCategoryCheckBox' value='".$row['id']."' style='margin-top:10px;' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='../categories/category.php?id=".$cat_id."' style='text-decoration:none; color:#21759B;'>".$row['title']."</a></div>";
		 echo "<div id='' style='float:left;width:18%; text-align:left;margin-top:18px; overflow:hidden;'>".$row['creator']."</div>";
		 echo "<div id='' style='float:left;width:27%; text-align:left;margin-top:18px; overflow:hidden;'>".$description."</div>";
		 echo "<div id='' style='float:left;width:8%;  text-align:left;margin-top:18px;'>".$row['status']."</div>";
		 echo "<div id='' style='float:left;width:11%; text-align:left;margin-top:18px;'>".$row['creation_date']."</div>";
		 echo "<div id='' style='float:left;width:13%; text-align:left;margin-top:18px;text-align:center;'>".$row['modifier']."</div>";
		 echo "<div style='clear:both;'></div>";
		 echo "</div>";
         $i++;
	   }
}
	
	
	
public function showAllExperiments()
{
  $i = 0;
  $query = "SELECT * FROM `experiments`  ORDER BY `exp_id` DESC ";
  $runQuery = mysql_query($query);
  while($row = mysql_fetch_array($runQuery))
  {
	     $exp_id = $row['exp_id'];
		 if(strlen(strip_tags($row['description'])) > 55)
		    $description = substr((strip_tags($row['description'])),0,55)."....";
		 else
		    $description = strip_tags($row['description']);

		 echo "<div style='clear:both; height:50px; background-image:url(../../images/dataBGShadow.jpg);font-family:Georgia; font-size:13px; color:#21759B;'>";
		 echo "<div id='' style='width:22%; text-align:left; margin-left:10px; float:left;margin-top:7px;'><input type='checkbox' name='showExpCheckBox' value='".$row['exp_id']."' style='margin-top:10px;' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='../experiments/edit-experiment.php?expId=".$exp_id."' style='text-decoration:none; color:#21759B;'>".$row['title']."</a></div>";
		 echo "<div id='' style='float:left;width:19%; text-align:left;margin-top:18px;'>".$row['creator']."</div>";
		 echo "<div id='' style='float:left;width:30%; text-align:left;margin-top:18px; overflow:hidden;'>".$description."</div>";
		 echo "<div id='' style='float:left;width:10%; text-align:left;margin-top:18px;'>".$row['status']."</div>";
		 echo "<div id='' style='float:left;width:18%; text-align:left;margin-top:18px;'>".$row['creation_date']."</div>";
		 echo "<div style='clear:both;'></div>";
		 echo "</div>";
  }
}	


	
	
	
public function editTab($tabId,$updateTitle)
{
   if($tabId != "")
	 $query = "SELECT * FROM `tabs` WHERE `tab_id`='".$tabId."'";
   else
	 $query = "SELECT * FROM `tabs` WHERE `title`='".$updateTitle."'";
   $runQuery = mysql_query($query);
   $resQuery = mysql_fetch_array($runQuery);
   return $resQuery;
}

	
	
	
public function showAllUsers()
{
  $query = "SELECT * FROM `user` ORDER BY `f_name`";
  $runQuery = mysql_query($query);
  if (!is_resource($runQuery)) {
   echo mysql_error();
   }
  
  while($row = mysql_fetch_array($runQuery))
   { 
	 echo "<div style='clear:both; height:50px; background-image:url(../../images/dataBGShadow.jpg);font-family:Georgia; font-size:13px; color:#21759B;'>";
	 echo "<div id='' style='width:22%; text-align:left; margin-left:10px; overflow:hidden; float:left;margin-top:7px;'><input type='checkbox' name='showUserCheckBox' value='".$row['uid']."' style='margin-top:10px;' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit-user.php?userId=".$row['uid']."' style='text-decoration:none;'>".$row['f_name']." ".$row['l_name']."</a></div>";
	 echo "<div id='' style='float:left;width:29%; text-align:left;left;margin-top:18px;'>".$row['email']."</div>";
	 echo "<div id='' style='float:left;width:10%; text-align:left;left;margin-top:18px;'>".$row['user_type']."</div>";
	 echo "<div id='' style='float:left;width:16%; text-align:left;left;margin-top:18px;'>".$row['ph_no']."</div>";
	 echo "<div id='' style='width:19%; text-align:left; float:right;margin-top:18px;'>".$row['status']."</div>";
	 echo "<div style='clear:both;'></div>";
	 echo "</div>";
   }
}
	
	
	
public function addTabs($expId,$tabs,$tabContentStatus)
{
  $query = "SELECT * FROM `tabs` ORDER BY `title` ";
  $runQuery = mysql_query($query);
  
  /*$query = "SELECT `tab_id` FROM `tabs` WHERE `title`='Feedback' ";
  $tabIdQuery = mysql_query($query);
  $tabResQuery = mysql_fetch_array($tabIdQuery);
  $feedbackTabId = $tabResQuery['tab_id'];*/
  
  $i=0;
  $checked = "checked";
  $unchecked = "unchecked";
  $status = "";
  $enable = "enabled";
  echo "<table>";
  while($row = mysql_fetch_array($runQuery))
   { 
	 $tid = $row['tab_id'];
	 if($tabContentStatus != "")
	 {
	    for($j=0; $j<sizeof($tabContentStatus); $j++)
	    {
	       $enable = "enabled";
	       $status = "";
	       $getId = explode("_",$tabContentStatus[$j]);
	       //if($getId[1] != $feedbackTabId)
	       //{
	          if($tid == $getId[1])
	          {   
		        if($getId[0] == "draft")
		        {
		           $status = "do publish";
			       $enable = "disabled";
		        }
		       break;
	          }
	       //}
	    }
	 }
	 echo "<tr style='clear:both;'>";
	 if($row['title'] == "Feedback"){
echo "<td style='float:left; margin-left:15px; *padding-right:46%; font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#5E99B3; *text-align:left;'><input type='checkbox' name='check_".$i."' id='".$tid."' value='".$row['tab_id']."' checked />&nbsp;&nbsp;&nbsp;".$row['title']."&nbsp;&nbsp;&nbsp;</td>";
	 }
	 else
	 {
	 echo "<td style='float:left; margin-left:15px; *padding-right:46%; font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#5E99B3; *text-align:left;'><input type='checkbox' name='check_".$i."' id='".$tid."' value='".$row['tab_id']."' ".(in_array($tid,$tabs) ? $checked : $unchecked)." ".$enable." />&nbsp;&nbsp;&nbsp;".$row['title']."&nbsp;&nbsp;&nbsp;</td>";
	}
	 echo "<td id='tabStatus_".$i."' style='color:#999999;'><a href='#' onclick='ajaxChangeTabStatus($expId,$tid);' style='text-decoration:none;'>".$status."</a></td>";
	 //echo "<td id='xx'></td>";
	 echo "</tr>";
	 $i++;
   }
   echo "<input type='hidden' name='totalCheckBox' value='".$i."'>";
   echo "</table>";
}



public function addCategory($expId)
{
   $sql = "select * from `experiments` where 	`exp_id`='".$expId."' ";
   $res = mysql_query($sql);
   $row = mysql_fetch_array($res);
   $catIds = explode(',',$row['cat_ids']);
   
   $query = "select * from categories order by `title`";
   $resQuery = mysql_query($query);
   $i = 0;
   
   echo "<table>";
   while($row = mysql_fetch_array($resQuery))
   {
        $checked = "";
        if(in_array($row['id'],$catIds))
		    $checked = "checked";
			
        echo "<tr>";
		echo "<td style='float:left; margin-left:15px; *padding-right:46%; font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#5E99B3; *text-align:left;'><input type='checkbox'  name='catCheckbox_".$i."' value='".$row['id']."' ".$checked." />&nbsp;&nbsp;&nbsp;".$row['title']."&nbsp;&nbsp;&nbsp;</td>";
		echo "</tr>";
		$i++;
   }
   echo "</table>";
}

	
	
public function editExperiment($expId)
{
   $query = "SELECT * FROM `experiments` WHERE `exp_id`='".$expId."';";
	 
   $runQuery = mysql_query($query);
   $resQuery = mysql_fetch_array($runQuery);
   return $resQuery;
}



public function getTabIds($expId)
{
   $tabIds = "";
   $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."';";
   $runQuery = mysql_query($query);
   while($resQuery = mysql_fetch_array($runQuery))
   {
     $tabIds .= $resQuery['tab_id'].",";
   }
   $tabIds = substr($tabIds,0,-1);
   return $tabIds;
}


public function showExperiments()
{
	  $query = "SELECT * FROM `experiments`";
	  $runQuery = mysql_query($query);
	  $runQuery1 = mysql_query($query);
      
	  $tabId = "";
	  echo "<select name='selectExperimentList' id='selectExperimentList' style='color:#999999; width:100px;'>";
	  echo "<option value='select'>---Select---</option>";
	  while($row = mysql_fetch_array($runQuery))
	   { 
	     $id = "expid_".$row['exp_id'];
		 echo "<option id='".$id."' value='".$row['exp_id']."' onclick='ajaxShowSpecificTabs(this.value);'>".$row['title']."</option>";   //ajaxShowSpecificFolderContents(this.value);
		 
	  }
	   echo "</select>";
	   
	  while($row1= mysql_fetch_array($runQuery1))
	   { 
	     $idd = "expidd_".$row1['exp_id'];
		 echo  "<input type='hidden'  name='".$idd."'  value ='".$row1['title']."'>";
	  }
}



public function showRightExperiments($whoseExp)
{
     if($whoseExp == 'yourExp')
          $query = "SELECT * FROM `experiments` WHERE `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' ORDER BY `exp_id` DESC "; 
	 else
	      $query = "SELECT * FROM `experiments` WHERE `creator` <>('".$_SESSION['f_name'].' '.$_SESSION['l_name']."') ORDER BY `exp_id` DESC "; 
		  
	 $runQuery = mysql_query($query);
	 $count = mysql_num_rows($runQuery);
	 if($count > 0)
	 {
		 echo "<table>"; 
		 while($row = mysql_fetch_array($runQuery))
		 {
		  echo "<tr style=''>";
		  $linkPath = "http://vls1.iitkgp.ernet.in/vls_web/vls_admin/experiments/edit-experiment.php?expId=".$row['exp_id'];
		  echo "<td id='yourExp'><a href='".$linkPath."' style='text-decoration:none;'>".$row['title']."</a></td>";
		  echo "</tr>";
		}
		echo "</table>"; 
	 }
	 else
	    echo "<div id='nothing'> Nothing to display</div>";
}



public function showSpecificTabs()
{
      $expId = $_GET['expId'];
	  $query = "SELECT `tabs_id` FROM `experiments` WHERE `exp_id` = '".$expId."'  ";
	  $runQuery = mysql_query($query);
	  $row = mysql_fetch_array($runQuery);
	  $tabs = $row['tabs_id'];
	  $query = "SELECT * FROM `tabs` WHERE `tab_id` in (".$tabs.")  ORDER BY  `index` ";
	  $runQuery = mysql_query($query);
	  echo "Select Tab ::&nbsp;&nbsp;";
	  echo "<select name='selectTabList' id='selectTabList' style='color:#999999; width:100px;'>";
	  echo "<option value='select'>---Select---</option>";
	  while($row = mysql_fetch_array($runQuery))
	   { 
	     //echo "<option>".$row['title']."</option>";
	     //$expIdTabTitle = $expId."pp";
		 echo "<option value='".$row['tab_id']."_".$row['title']."' onclick='ajaxGetTabContent($expId,this.value);'>".$row['title']."</option>";
	   }
	   echo "</select>";
}






public function getTabContent()
{
    $expId = $_GET['expId'];
	$tabId = $_GET['tabId'];
	
	
	$query = "SELECT `content` FROM `tabcontents` WHERE `exp_id`='".$expId."' AND `tab_id`='".$tabId."'";
	//exit();
	$runQuery = mysql_query($query);
	$resQuery = mysql_fetch_array($runQuery);
	if($resQuery['content'] != "")
	   echo $resQuery['content'];
	else
	   echo "";
}

public function getTabContentStatus($expId)
{
  $query = "SELECT * FROM `tabcontents` WHERE `exp_id`='".$expId."'";
  $runQuery = mysql_query($query);
  $statusArray = array();
  $i = 0;
  while($resQuery = mysql_fetch_array($runQuery))
  {
    $statusArray[$i] = $resQuery['status']."_".$resQuery['tab_id'];
	$i++;
  }
/*  echo "<pre>";
  print_r($statusArray);
  echo "</pre>";
  exit();
*/  return $statusArray;
}



public function ajxChangeTabStatus()
{
  $expId = $_GET['expId'];
  $tabId = $_GET['tabId'];
  $query = "UPDATE `tabcontents` SET `status`='published' WHERE `exp_id`='".$expId."' AND `tab_id`='".$tabId."'";
  mysql_query($query);
  $result = $this->editExperiment($expId);
  $tabIds = $result['tabs_id'];
  $tabs = explode(",",$tabIds);

  $tabContentStatus = $this->getTabContentStatus($expId);
 // $this->addTabs($expId,$tabs,$tabContentStatus);
  
  //echo "";
  

  $query = "SELECT * FROM `tabs` ORDER BY `title`";
  $runQuery = mysql_query($query);
  
  //$stat = array(); //'1','3','6');
  $i=0;
  $checked = "checked";
  $unchecked = "unchecked";
  $status = "";
  $enable = "enabled";
  echo "<table>";
  while($row = mysql_fetch_array($runQuery))
   { 
	 $tid = $row['tab_id'];
	 if($tabContentStatus != "")
	 {
	 for($j=0; $j<sizeof($tabContentStatus); $j++)
	 {
	   $enable = "enabled";
	   $status = "";
	   $getId = explode("_",$tabContentStatus[$j]);
	   if($tid == $getId[1])
	   {   
		  if($getId[0] == "draft")
		  {
		    $status = "do publish";
			$enable = "disabled";
		  }
		  break;
	   }
	 }
	 }
	 echo "<tr style='clear:both; border:1px solid green;'>";
	 echo "<td style='float:left; margin-left:15px; *padding-right:46%; font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#5E99B3; *text-align:left;'><input type='checkbox' name='check_".$i."' id='".$tid."' value='".$row['tab_id']."' ".(in_array($tid,$tabs) ? $checked : $unchecked)." ".$enable." />&nbsp;&nbsp;&nbsp;".$row['title']."&nbsp;&nbsp;&nbsp;</td>";
	 echo "<td id='tabStatus_".$i."' style='color:#999999;'><a href='#' onclick='ajaxChangeTabStatus($expId,$tid);' style='text-decoration:none;'>".$status."</a></td>";
	 //echo "<td id='xx'></td>";
	 echo "</tr>";
	 $i++;
   }
   echo "<input type='hidden' name='totalCheckBox' value='".$i."'>";
   echo "</table>";
}




public function getUserDetais($userId)
{
   $query = "SELECT * FROM `user` WHERE `uid`='".$userId."'";
   $runQuery = mysql_query($query);
   $resQuery = mysql_fetch_array($runQuery);
   return $resQuery;
}




public function ajxAdminLoginCheck()
{
if(isset($_GET['username']) && $_GET['username'] != "")
    $uername= $_GET['username'];
	
if(isset($_GET['password']) && $_GET['password'] != "")
    $password= $_GET['password'];

if(isset($_GET['type']) && $_GET['type'] != "")
    $type= $_GET['type'];
	
$query = "SELECT * FROM `user` WHERE `email`='".$uername."' and `password`='".$password."' and `user_type`='".$type."'";

$result = mysql_query($query);
if(mysql_num_rows($result) > 0){
	while($row = mysql_fetch_array($result))
		  {
			  $_SESSION['uid']            = $row['uid'];
			  $_SESSION['f_name']    = $row['f_name'];
              $_SESSION['l_name']    = $row['l_name'];
			  $_SESSION['email']        = $row['email'];
			  $_SESSION['userType'] = $row['user_type'];
		  }
		
  echo "Success";
}
else
  echo "Invalid Email or Password!";
}


public function getTotalNoOfContents($type)
{
    $sql = "SELECT * FROM ".$type ;
	$runQuery = mysql_query($sql);
	echo mysql_num_rows($runQuery);
}

public function getRecentDrafts($type)
{
    $sql = "SELECT * FROM ".$type."  WHERE `status`='draft' ORDER BY `creation_date` DESC LIMIT 5"  ;
	$runQuery = mysql_query($sql);
	while($row = mysql_fetch_array($runQuery))
	{
	   echo "<tr>";
	   echo "<td style='text-align:left; padding-left:10px;'>".$row['title']."</td>";
	   echo "<td style='text-align:left; padding-left:10px;padding-bottom:10px; margin-top:-15px;'>".$row['creation_date']."</td>";
	   echo "</tr>";
	}
}


public function showCategories()
{
   //include('../config.php');
   $sql = "SELECT * FROM `categories` order by `title` ";
   $res = mysql_query($sql);
   echo "<table>";
   while($row = mysql_fetch_array($res))
   {
		  echo "<tr style=''>";
		  echo "<td id='yourExp'><a href='category.php?id=".$row['id']."' style='text-decoration:none;'>".$row['title']."</a></td>";
		  echo "</tr>";
   }
   echo "</table>";
}


public function getCategoryDetails($id)
{
    $sql = "select * from `categories` where `id`='".$id."' ";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	return $row;
}



public function displayUserLog()
{

  $query = "select a.`uid`,a.`email`,a.`f_name`,a.`l_name`,b.`activities`,b.`date` from `user` a, `user_log` b where b.`uid`=a.`uid` ORDER BY b.`date`";
  $runQuery = mysql_query($query);
  if (!is_resource($runQuery)) {
   echo mysql_error();
   }
  
  while($row = mysql_fetch_array($runQuery))
   { 
	 echo "<div style='clear:both; height:50px; background-image:url(../../images/dataBGShadow.jpg);font-family:Georgia; font-size:13px; color:#21759B;'>";
	 echo "<div id='' style='width:22%; text-align:left; margin-left:10px; overflow:hidden; float:left;margin-top:7px;'><input type='checkbox' name='showUserCheckBox' value='".$row['uid']."' style='margin-top:10px;' />&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit-user.php?userId=".$row['uid']."' style='text-decoration:none;'>".$row['f_name']." ".$row['l_name']."</a></div>";
	 echo "<div id='' style='float:left;width:20%; text-align:left;margin-top:18px;'>".$row['email']."</div>";
	 echo "<div id='' style='float:left;width:40%; text-align:left;margin-top:18px; height:30px; overflow:hidden;'>".$row['activities']."</div>";
	 echo "<div id='' style='float:left;width:16%; text-align:center;margin-top:18px;'>".$row['date']."</div>";
	 //echo "<div id='' style='width:19%; text-align:left; float:right;margin-top:18px;'>".$row['status']."</div>";
	 echo "<div style='clear:both;'></div>";
	 echo "</div>";
   }
}


}
?>