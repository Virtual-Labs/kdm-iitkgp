<?php session_start(); ?>
<?php
include('database_connect.php');
?>
<?php
if(isset($_GET['referral']) && $_GET['referral'] !="")
{
  $obj = new dataInsertQuery();
  /*echo $_GET['referral'];
  exit();*/
  $obj->$_GET['referral']();
}
?>
<?php
class dataInsertQuery{

public function tab()
 {
    $title    = $_POST['createTitle'];
	$content  = $_POST['editorContent'];
	$filename = $_POST['imagePath'];
	$prvTitle = $_POST['prvTitle'];
	if(isset($_FILES['uploadTabPic']['name']) && $_FILES['uploadTabPic']['name'] != "")
	{
	    //$_FILES['uploadTabPic']['name'];
		$image = $_FILES['uploadTabPic']['name'];
		$folder = "../../images/tab_img/";
		if($image)
		$filename = $folder.$title.".jpg";
		$copied = copy($_FILES['uploadTabPic']['tmp_name'], $filename);
		$imagePath =  substr($filename,3,strlen($filename));
		if($prvTitle != $title)
		  unlink($folder .  $prvTitle.".jpg");
	}
	    
	if(isset($_POST['mt']))
	  $tab_id = $_POST['mt'];

	  
	$dateTime= date('d/m/y : H:i:s', time());
	
	if($_GET['action'] == "create")
	{
	
    $query = "INSERT INTO `tabs` (`title`,`description`,`image`,`status`,`creator`,`creation_date`) VALUES ('".mysql_real_escape_string($title)."','".mysql_real_escape_string($content)."','".$imagePath."','published','".$_SESSION['f_name'].' '.$_SESSION['l_name']."','".$dateTime."');";
    mysql_query($query);
	header('Location: ../tabs/edit-tab.php?updateTitle='.$title);
	}
	else
	{
	$query = "UPDATE `tabs` SET `title`='".$title."', `description`='".$content."' , `image`='".$imagePath."' ,  `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."'  WHERE `tab_id`='".$tab_id."'  ";
    mysql_query($query);
	header('Location: ../tabs/edit-tab.php?updateTitle='.$title.'&tabid='.$tab_id);
	}
 }
 
 
 
 
public function experiment()
{
    if(isset($_POST['createTitle']))    $title = $_POST['createTitle'];
	if(isset($_POST['editorContent']))  $content = $_POST['editorContent'];
	if(isset($_POST['totalCheckBox']))  $totalCheckBox = $_POST['totalCheckBox'];
	if(isset($_POST['expId']))         	$expId = $_POST['expId'];
	if(isset($_POST['prvTab']))         $prvTab = $_POST['prvTab'];
	
	$sql = "select * from `categories` where `status`='Published' ";
	$res = mysql_query($sql);
	$noOfCat = mysql_num_rows($res);
	$catIds = "";
	for($j=0; $j<$noOfCat; $j++)
	{
	   if(isset($_POST['catCheckbox_'.$j]))
	      $catIds .= $_POST['catCheckbox_'.$j].',';
	}
	$catIds = substr($catIds, 0, -1);
	
	$tabIds = "";
	for($i=0; $i<$totalCheckBox; $i++)
	{
	   if(isset($_POST['check_'.$i]))
	     $tabIds .= $_POST['check_'.$i].',';
	}
	$tabIds = substr($tabIds,0,-1);
	//exit();
	$dateTime= date('d/m/y : H:i:s', time());
	
	if($_GET['action'] == "create")
	{
    $query = "INSERT INTO `experiments` (`title`,`description`,`tabs_id`,`cat_ids`,`creator`,`creation_date`,`status`) VALUES ('".$title."','".mysql_real_escape_string($content)."','".$tabIds."','".$catIds."', '".$_SESSION['f_name'].' '.$_SESSION['l_name']."','".$dateTime."','published');";
    mysql_query($query);
		
	$query = "SELECT * FROM `experiments` WHERE `title`='".$title."'";
	$runQuery = mysql_query($query);
	$resQuery = mysql_fetch_array($runQuery);
	$expId = $resQuery['exp_id'];
	 mkdir("../../experiments/expfolder_".$resQuery['exp_id'], 0777);

	
	$query = "SELECT `tab_id` FROM `tabs` WHERE `title`='Feedback' "  ;
	$runQuery = mysql_query($query);
	$resQuery = mysql_fetch_array($runQuery);
	$feedbackId = $resQuery['tab_id'];
	
    /*$query = "INSERT INTO `tabcontents` (`exp_id`, `tab_id`, `content`, `status`, `modifier`, `last_modification`) VALUES ('".$expId."','".$feedbackId."' ,'' ,'published','Admin','".$dateTime."');";
	//exit();
    mysql_query($query);*/
    $addContentTab = explode(",",$tabIds);
	if($addContentTab != "")
	{
	for($i=0; $i<sizeof($addContentTab); $i++)
	{
    $query = "INSERT INTO `tabcontents` (`exp_id`, `tab_id`, `content`, `status`, `modifier`, `last_modification`) VALUES ('".$expId."','".$addContentTab[$i]."' ,'' ,'published','".$_SESSION['f_name'].' '.$_SESSION['l_name']."', '".$dateTime."');";
	mysql_query($query);
	}
	}
	header('Location: ../experiments/edit-experiment.php?expId='.$expId);
	}
	else
	{
	$newTabs = $prvTab.",";
	$draftTab = "";
	$addNewContentTab = "";
	$prvTab1 = explode(",",$prvTab);
	$prsTab  = explode(",",$tabIds);

	for($i=0; $i<sizeof($prsTab); $i++)
	{
	  if(!in_array($prsTab[$i],$prvTab1))
	  {
		   $newTabs .= $prsTab[$i].",";
		   $addNewContentTab .= $prsTab[$i].",";
	  }
	}
	for($j=0; $j<sizeof($prvTab1); $j++)
	{
	  if(!in_array($prvTab1[$j],$prsTab))
	       $draftTab .= $prvTab1[$j].",";
	}
	$draftTab = substr($draftTab,0,-1);
	$newTabs = substr($newTabs, 0, -1);
	
	$query = "UPDATE `experiments` SET `title`='".mysql_real_escape_string($title)."', `description`='".mysql_real_escape_string($content)."', `tabs_id`='".$newTabs."', `cat_ids`='".$catIds."', `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `exp_id`='".$expId."';";
    mysql_query($query);

    $addNewContentTab=substr($addNewContentTab,0,-1);
	if($addNewContentTab != "")
	{
	$addNewContentTab = explode(",",$addNewContentTab);
	for($i=0; $i<sizeof($addNewContentTab); $i++)
	 {
       $query = "INSERT INTO `tabcontents` (`exp_id`, `tab_id`, `content`, `status`, `modifier`, `last_modification`) VALUES ('".$expId."','".$addNewContentTab[$i]."' ,'' ,'published','".$_SESSION['f_name'].' '.$_SESSION['l_name']."', '".$dateTime."');";
       mysql_query($query);
	 }
	}
	if($draftTab !="")
	{
	$query = "UPDATE `tabcontents` SET `status`='draft', `modifier`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `exp_id`='".$expId."' AND `tab_id` IN (".$draftTab.")";
	mysql_query($query);
	}

	//header('Location: ../experiments/edit-experiment.php?expId='.$expId.'&tabIds='.$tabIds);
	header('Location: ../experiments/edit-experiment.php?expId='.$expId);
	}
}




public function category()
{
	$dateTime= date('d/m/y : H:i:s', time());
	$title = $_POST['createTitle'];
	$content = $_POST['editorContent'];
	$id = $_POST['catid'];
    $action = $_POST['act'];
	if($action == 'create')
	{ 
		$sql = "INSERT INTO `categories` SET `title`='".$title."' , `description`='".$content."' , `status`='Published'  ,`creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' , `creation_date`='".$dateTime."' , `modifier`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."', `last_modification`='".$dateTime."' ";
		mysql_query($sql);
		$sql = "SELECT * FROM `categories` WHERE `title`='".$title."'  ";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$id = $row['id'];
	}
	if($action == 'edit')
	{
	   $sql = "UPDATE `categories` SET  `title`='".$title."' , `description`='".$content."'  , `modifier`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' , `last_modification`='".$dateTime."'  WHERE `id`='".$id."' ";
	    mysql_query($sql);
	}
	header('Location: ../categories/category.php?id='.$id);
}




public function addTabContent()
{
    $expId     = $_POST['selectExperimentList'];
	//echo "<br />";
	$expFolder = $_POST['expidd_'.$expId];
	//echo "<br />";
	$tabId      = $_POST['selectTabList'];
	///exit();
	
	$tabId = explode("_",$tabId);
	$createContent = $_POST['editorContent'];
	$dateTime= date('d/m/y : H:i:s', time());
	
	if(isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "")
	{
		echo $file = $_FILES['uploadFile']['name'];
		echo  "<br />";
		echo $folder = "../../experiments/expfolder_".$expId."/";
		//exit();
		if($file)
		$filename = $folder.$file;
		 copy($_FILES['uploadFile']['tmp_name'], $filename);
		 chmod( $filename, 0777);
		//exit():
		//$imagePath =  substr($filename,3,strlen($filename));
		/*if($prvTitle != $title)
		  unlink($folder .  $prvTitle.".jpg");*/
	}

	$query = "UPDATE `tabcontents` SET `content`='".mysql_real_escape_string($createContent)."',`modifier`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."', `last_modification`='".$dateTime."' WHERE `exp_id`='".$expId."' AND `tab_id`='".$tabId[0]."'";
	mysql_query($query);
    header('Location: ../tabs/add-tab-content.php');
}



public function changeUserType()
{
  $changeTo = $_GET['changeTo'];
  $uids = $_GET['userIds'];
  $query = "UPDATE `user` SET `user_type`='".$changeTo."', `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `uid` IN (".$uids.")";
  mysql_query($query);
  header('Location: ../users/show-users.php');
}

public function changeUserStatus()
{
  $uids = $_GET['userIds'];
  $changeTo = $_GET['changeTo'];
  if($changeTo != "Delete")
    $query = "UPDATE `user` SET `status`='".$changeTo."', `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `uid` IN (".$uids.")";
  else
    $query = "DELETE FROM `user` WHERE `uid` IN (".$uids.")";
	

  mysql_query($query);
  header('Location: ../users/show-users.php');
}



public function changeTabStatus()
{
  $tabIds = $_GET['tabIds'];
  $changeTo = $_GET['changeTo'];
  if($changeTo != "delete")
  {
    $query = "UPDATE `tabs` SET `status`='".$changeTo."', `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `tab_id` IN (".$tabIds.")";
	mysql_query($query);
  }
  else
  {
    $query = "DELETE FROM `tabs` WHERE `tab_id` IN (".$tabIds.")"; 
	mysql_query($query);
	$query = "DELETE FROM `tabcontents` WHERE `tab_id` IN (".$tabIds.")";
	mysql_query($query);
	
  }

  mysql_query($query);
  header('Location: ../tabs/show-tabs.php');
}



public function changeCategoryStatus()
{
  $catIds = $_GET['catIds'];
  $changeTo = $_GET['changeTo'];
  if($changeTo != "delete")
  {
    $query = "UPDATE `categories` SET `status`='".$changeTo."', `modifier`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `id` IN (".$catIds.")";
	mysql_query($query);
  }
  else
  {
    $query = "DELETE FROM `categories` WHERE `id` IN (".$catIds.")"; 
	mysql_query($query);
  }

  mysql_query($query);
  header('Location: ../categories/show-categories.php');
}


public function changeExpStatus()
{
  $expIds = $_GET['expIds'];
  $changeTo = $_GET['changeTo'];
  if($changeTo != "delete")
  {
    $query = "UPDATE `experiments` SET `status`='".$changeTo."' , `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `exp_id` IN (".$expIds.")";
	mysql_query($query);
  }
  else
  {
    $query = "DELETE FROM `experiments` WHERE `exp_id` IN (".$expIds.")";
	mysql_query($query);
	$query = "DELETE FROM `tabcontents` WHERE `exp_id` IN (".$expIds.")";
	mysql_query($query);
	$removeExpFolder = explode(',', $expIds);
	foreach($removeExpFolder as $val)
	{
	    $path = "../../experiments/expfolder_".$val."/";
		$this->destroyDir($path);
	}
	    
	
  }
  header('Location: ../experiments/show-experiments.php');
}


private function destroyDir($dir, $virtual = false)
{
	    if (is_dir($dir) && $handle = @ opendir($dir))
		{
			while ($file = readdir($handle))
			{
				if($file == '.' || $file == '..')
				{
					continue;
				}
				else if(is_dir($dir.$file))
				{
				   echo  $dir.$file;
				   $this->destroyDir($dir.$file."/");
				}
				else
				{
					unlink( $dir.$file);
				}
			}
		closedir($handle);
		rmdir($dir);
		return true;
	}
	else
	{
		return false;
	}

}

















public function setTabIndex()
{
    $tabTitles = $_GET['tabTitles'];
	$tabTitles = explode(",",$tabTitles);
	/*echo "<pre>";
	print_r($tabTitles);
	echo "</pre>";*/
	//echo "<br/>";
	$tabIndexs = $_GET['tabIndexs'];
	$tabIndexs = explode(",",$tabIndexs);
	/*echo "<pre>";
	print_r($tabIndexs);
	echo "</pre>";*/
	$totalTab  = $_GET['totalTab']; 
	//exit();
	//echo $totalTab;
	//exit();
	for($i=0; $i<$totalTab; $i++)
	{
	  $query = "UPDATE `tabs` SET `index`='".$tabIndexs[$i]."' , `creator`='".$_SESSION['f_name'].' '.$_SESSION['l_name']."' WHERE `title`='".$tabTitles[$i]."' ";
	  //exit();
	  //echo "<br />";
	  mysql_query($query);
	}
	header('Location: ../tabs/show-tabs.php');
}




public function createNewUser()
{
  $newUser = array('email','password','f_name','l_name','age','gender','ph_no','profession','college','subject','university','country','state','user_type');
  
  $query = "INSERT INTO `user` (";
  $value = " VALUES (";
  foreach($newUser as $val)
   {
     if(isset($_POST[$val])  && $_POST[$val] != ""){
	   $query = $query."`".$val."`".",";
	   $value = $value."'".$_POST[$val]."'".",";
	   }
   }
   $query = $query."`status`)";
   $value = $value."'Active');";
   $query = $query.$value;
   mysql_query($query);
   header('Location: ../users/create-user.php?msg=success');
}



 
}

?>

